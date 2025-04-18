function showOneko() {
    var state = document.getElementById("enableOneko").checked;
    document.cookie = "oneko=" + state + ";path=/";
    document.getElementById("oneko").style.display = state ? 'none' : 'block';
}

function musicCookie() {
    var state = document.getElementById("enableAutoplay").checked;
    document.cookie = "autoplay=" + state + ";path=/";
}

function getCookieByName(name) {
    const cookies = document.cookie.split(';');
    for (let cookie of cookies) {
        cookie = cookie.trim();
        if (cookie.startsWith(name + '=')) {
            return cookie.substring(name.length + 1);
        }
    }
    return null;
}

// do this on first viewing
if(getCookieByName("autoplay") === null) {
    document.cookie = "autoplay=" + false + ";path=/";
}

// this is kinda messy crap, i know.
// we need to update the state of oneko based on what we set
// this will also update the cookie
document.getElementById("enableOneko").checked = (getCookieByName("oneko") === 'true');
document.getElementById("enableAutoplay").checked = (getCookieByName("autoplay") === 'true');
showOneko();

// make the musicplayer autoplay as necessary
var player = document.getElementById("musicPlayer");
player.volume = 0.30;

if(getCookieByName("autoplay") == 'false') {
    if(!forceStopPlayer) player.play();
}

