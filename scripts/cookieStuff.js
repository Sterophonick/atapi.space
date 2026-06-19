function showOneko() {
    var state = document.getElementById("enableOneko").checked;
    document.cookie = "oneko=" + state + ";path=/";
    document.getElementById("oneko").style.display = (getCookieByName("oneko") == "true" ? true : false ) ? 'none' : 'block';
}

function musicCookie() {
    var state = document.getElementById("enableAutoplay").checked;
    document.cookie = "autoplay=" + state + ";path=/";
}

function musicFocusCookie() {
    var state = document.getElementById("enablePauseOnFocus").checked;
    document.cookie = "focusplay=" + state + ";path=/";
}

function updateBgAnim() {
    if(getCookieByName("bganim") == 'true') {
        document.body.classList.add('no-bg-anim');
    } else {
        document.body.classList.remove('no-bg-anim');
    }
}

function bgAnimCookie() {
    var state = document.getElementById("disableBgAnim").checked;
    document.cookie = "bganim=" + state + ";path=/";
    
    updateBgAnim();
}


function getCookieByName(name) {
    const cookies = document.cookie.split(';');
    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
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

if(window.location.pathname == "/site/") {
    document.getElementById("enableOneko").checked = (getCookieByName("oneko") === 'true');
    document.getElementById("enableAutoplay").checked = (getCookieByName("autoplay") === 'true');
    document.getElementById("enablePauseOnFocus").checked = (getCookieByName("focusplay") === 'true');
    document.getElementById("disableBgAnim").checked = (getCookieByName("bganim") === 'true');
    showOneko();
}

//updateBgAnim();

// make the musicplayer autoplay as necessary
var player = document.getElementById("musicPlayer");
player.volume = 0.30;

if(getCookieByName("autoplay") == 'false') {
    if(!forceStopPlayer) player.play();
}

document.getElementById("oneko").style.display = (getCookieByName("oneko") == "true" ? true : false ) ? 'none' : 'block';
