const musicPlayer = document.getElementById('musicPlayer');
const interruptAudios = document.querySelectorAll('.interruptAudio, .interruptVideo');


var areWePausing = 0;

var oldVolume = 0.30;

var anyInterruptPlaying = false;

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
    let detectManualPause = 0;

    // Check if any interruptAudio is currently playing
    anyInterruptPlaying = false;

    interruptAudios.forEach(audio => {
        if (!audio.paused && !audio.ended) {
            anyInterruptPlaying = true;
        }
    });

    // If any interruptAudio is playing, pause the music player
    if (anyInterruptPlaying) {
        if(musicPlayer.paused) {
            detectManualPause = 1;
        } else {
            detectManualPause = 0;
        }

        musicPlayer.pause();
    } else {
        // If no interruptAudio is playing, play the music player
        if(!detectManualPause) {

            // prevent conflicts with the timings
            if(!areWePausing)
                oldVolume = musicPlayer.volume;

            musicPlayer.volume = 0.00;
            musicPlayer.play();

            let volume = 0.0;

            const fadeInterval = setInterval(() => {
                areWePausing = 1;
                if (volume < oldVolume || anyInterruptPlaying) {
                    volume += 0.05;
                    musicPlayer.volume = Math.min(volume, 1.0);

                    interruptAudios.forEach(audio => {
                        if (!audio.paused && !audio.ended) {
                            clearInterval(fadeInterval);
                            areWePausing = 0;
                            musicPlayer.volume = oldVolume;

                        }
                    });

                } else {
                    clearInterval(fadeInterval);
                    areWePausing = 0;
                }

            }, 100);
        }

    }
}

if(getCookieByName2("autoplay") == 'false') {
    var playingOnHide = !musicPlayer.paused;

    // Add event listeners to check whenever any interruptAudio starts or ends
    interruptAudios.forEach(audio => {
        audio.addEventListener('play', checkInterruptAudio);
        audio.addEventListener('pause', checkInterruptAudio);

        // we used to have this listener but it caused a race condition with the fade-in timer.
        //audio.addEventListener('ended', checkInterruptAudio);
    });

    document.addEventListener('visibilitychange', () => {
        if(document.hidden) {
            playingOnHide = !musicPlayer.paused;
            musicPlayer.pause();
        } else {
            if (playingOnHide) {
                musicPlayer.play();
            }
        }
    });
}
