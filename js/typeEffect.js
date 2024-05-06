// Wrap the script code in a function
function initializeTypeEffect() {
    const typedSpan = document.getElementById("typed");
    const totype = ["Frontend Expert", "Video Editor", "Photoshop Enthusiast", "YouTube Content Creator"];

    const delayTyping_char = 50;
    const delayErasing_text = 150;
    const delayTyping_text = 500;

    let totypeIndex = 0;
    let charIndex = 0;

    function typeText() {
        if (charIndex < totype[totypeIndex].length) {
            typedSpan.textContent += totype[totypeIndex].charAt(charIndex);
            charIndex++;
            setTimeout(typeText, delayTyping_char);
        } else {
            setTimeout(eraseText, delayTyping_text);
        }
    }

    function eraseText() {
        if (charIndex > 0) {
            typedSpan.textContent = totype[totypeIndex].substring(0, charIndex - 1);
            charIndex = charIndex - 1;
            setTimeout(eraseText, delayErasing_text);
        } else {
            totypeIndex++;

            if (totypeIndex >= totype.length)
                totypeIndex = 0;
            setTimeout(typeText, delayTyping_text);
        }
    }

    if (typedSpan) {
        setTimeout(typeText, delayTyping_text);
    }
}

// Call the function when the DOM content is fully loaded
document.addEventListener("DOMContentLoaded", function() {
    initializeTypeEffect();
});
