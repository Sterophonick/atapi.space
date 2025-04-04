const musicPlayer = document.getElementById('musicPlayer');
const interruptAudios = document.querySelectorAll('.interruptAudio, .interruptVideo');


function getCookieByName2(name) {
    const cookies = document.cookie.split(';');
    for (let cookie of cookies) {
        cookie = cookie.trim();
        if (cookie.startsWith(name + '=')) {
            return cookie.substring(name.length + 1);
        }
    }
    return null;
}

// Function to check if any interruptAudio is playing
function checkInterruptAudio() {
    // Check if any interruptAudio is currently playing
    let anyInterruptPlaying = false;

    interruptAudios.forEach(audio => {
        if (!audio.paused && !audio.ended) {
            anyInterruptPlaying = true;
        }
    });

    // If any interruptAudio is playing, pause the music player
    if (anyInterruptPlaying) {
        musicPlayer.pause();
    } else {
        // If no interruptAudio is playing, play the music player
        musicPlayer.play();
    }
}

if(getCookieByName2("autoplay") == 'false') {
    // Add event listeners to check whenever any interruptAudio starts or ends
    interruptAudios.forEach(audio => {
        audio.addEventListener('play', checkInterruptAudio);
        audio.addEventListener('pause', checkInterruptAudio);
        audio.addEventListener('ended', checkInterruptAudio);
    });
}
