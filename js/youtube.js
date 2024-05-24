const API_KEY="AIzaSyAyc6RggWwSogS5d1WyD59H5XRZ-R9Ap3w";
const CHANNEL_ID="UCSBk-EfghR8i7UqOVAYXbmw";


const ytContainer = document.getElementById("ytContainer");
const pagination = document.getElementById("pagination");
const videoIds = new Set(); // Using a Set to track unique video IDs
let nextPageToken = "";
let prevPageTokens = []; // To track previous page tokens

if (!ytContainer) {
    console.error('Error: Container element "ytContainer" not found');
} else {
    fetchVideos();
}

async function fetchVideos(pageToken = "") {
    try {
        const apiUrl = `https://www.googleapis.com/youtube/v3/search?key=${API_KEY}&channelId=${CHANNEL_ID}&part=snippet&order=date&type=video&maxResults=10&pageToken=${pageToken}`;
        const response = await fetch(apiUrl);
        const data = await response.json();

        if (!response.ok) {
            throw new Error(data.error.message);
        }

        ytContainer.innerHTML = ""; // Clear previous videos
        data.items.forEach((video) => {
            const videoId = video.id.videoId;
            if (videoId && !videoIds.has(videoId)) {
                // Check if the video ID is unique
                videoIds.add(videoId);
                const title = video.snippet.title;
                createVideoElement(videoId, title);
            }
        });

        // Update pagination
        nextPageToken = data.nextPageToken || "";
        updatePagination(pageToken);
    } catch (error) {
        console.error("Error fetching videos:", error);
    }
}

function createVideoElement(videoId, title) {
    const videoElement = document.createElement("div");
    videoElement.className = "video";
    videoElement.innerHTML = `
        <iframe
            src="https://www.youtube.com/embed/${videoId}"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
            title="${title}"
            onerror="handleIframeError(event, '${videoId}')"
        ></iframe>
    `;

    ytContainer.appendChild(videoElement);
}

function handleIframeError(event, videoId) {
    console.error(`Failed to load video: ${videoId}`);
    const iframe = event.target;
    iframe.src = "about:blank";
    iframe.nextElementSibling.textContent = "Failed to load video";
}

function updatePagination(currentToken) {
    pagination.innerHTML = "";

    if (prevPageTokens.length > 0) {
        const prevButton = document.createElement("button");
        prevButton.className = "page-button";
        prevButton.textContent = "Previous";
        prevButton.onclick = () => {
            const prevToken = prevPageTokens.pop();
            fetchVideos(prevToken);
        };
        pagination.appendChild(prevButton);
    }

    if (nextPageToken) {
        const nextButton = document.createElement("button");
        nextButton.className = "page-button";
        nextButton.textContent = "Next";
        nextButton.onclick = () => {
            prevPageTokens.push(currentToken);
            fetchVideos(nextPageToken);
        };
        pagination.appendChild(nextButton);
    }
}