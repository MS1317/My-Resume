const API_KEY="AIzaSyAyc6RggWwSogS5d1WyD59H5XRZ-R9Ap3w";
const CHANNEL_ID="UCSBk-EfghR8i7UqOVAYXbmw";

const latestVideoContainer = document.getElementById("latestVideo");

async function fetchLatestVideo() {
    try {
        const apiUrl = `https://www.googleapis.com/youtube/v3/search?key=${API_KEY}&channelId=${CHANNEL_ID}&part=snippet&order=date&type=video&maxResults=1`;
        const response = await fetch(apiUrl);
        const data = await response.json();

        if (!response.ok) {
            throw new Error(data.error.message);
        }

        const latestVideo = data.items[0];
        const videoId = latestVideo.id.videoId;
        const videoTitle = latestVideo.snippet.title;

        await fetchVideoDetails(videoId, videoTitle);
    } catch (error) {
        console.error("Error fetching latest video:", error);
    }
}

async function fetchVideoDetails(videoId, title) {
    try {
        const apiUrl = `https://www.googleapis.com/youtube/v3/videos?key=${API_KEY}&id=${videoId}&part=contentDetails`;
        const response = await fetch(apiUrl);
        const data = await response.json();

        if (!response.ok) {
            throw new Error(data.error.message);
        }

        const videoDetails = data.items[0].contentDetails;

        // YouTube Shorts are typically less than 60 seconds
        const isShort = videoDetails.duration.includes("S") && !videoDetails.duration.includes("M") && !videoDetails.duration.includes("H");

        console.log(isShort,"isShort")
        
        createVideoElement(videoId, title, isShort);
    } catch (error) {
        console.error("Error fetching video details:", error);
    }
}

function createVideoElement(videoId, title, isShort) {
    const wrapper = document.createElement("div");
    wrapper.className = "video-wrapper";

    const titleElement = document.createElement("div");
    titleElement.className = "video-title";
    titleElement.textContent = title;

    const videoElement = document.createElement("iframe");
    videoElement.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&controls=0&modestbranding=1&rel=0`;
    videoElement.title = title;
    videoElement.frameBorder = "0";
    videoElement.allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture";
    videoElement.allowFullscreen = true;

    if (isShort) {
        videoElement.style.width = '315px';
        videoElement.style.height = '560px';
    } else {
        videoElement.style.width = '560px';
        videoElement.style.height = '315px';
    }

    wrapper.appendChild(titleElement);
    wrapper.appendChild(videoElement);

    latestVideoContainer.innerHTML = ""; // Clear any previous video
    latestVideoContainer.appendChild(wrapper);
}

// Fetch the latest video when the page loads
fetchLatestVideo();