
var htmlFooter = '<div id="footer">';
htmlFooter += '<div id="separator">';
htmlFooter += '<br/>';
htmlFooter += '<img width="100%" height="6px" id="spacer" src="/assets/img/global/border.png">';
htmlFooter += '</div>';
htmlFooter += '<div id="message">';
if (location.pathname != "/" && location.pathname != "/index.html") htmlFooter += '<a href="..">(Go Back)</a> ';
htmlFooter += '<a href="#top">(Top of Page)</a><br/>'
htmlFooter += '<p>';
htmlFooter += '<div style="margin-top: -20px">';
htmlFooter += '<img class="pixelArt" src="/assets/img/home/web_button.gif"> <img class="pixelArt" src="/assets/img/global/cc-by-nc.png"><br/>';
htmlFooter += '</div>';
htmlFooter += 'made with love 2020-2025 Atapi / Sterophonick<br/>';
htmlFooter += 'any and all mentions of properties not mine belong to their respective owners<br/>';
if(window.location.host == "sterophonick.github.io") htmlFooter += "<div align='center'><a href='https://www.websitecounterfree.com'><img src='https://www.websitecounterfree.com/c.php?d=9&id=60115&s=1' border='0' alt='Free Website Counter'></a><br / ><small><a href='https://www.websitecounterfree.com' title='Free Website Counter'></a></small></div>"
htmlFooter += '<a href="https://github.com/Sterophonick/sterophonick.github.io" target="_blank"><small>Website Source<br/></small></a>';
htmlFooter += '<span><input type="checkbox" onclick="showOneko()" id="enableOneko"><small>Enable Oneko!</small></span>';
htmlFooter += '<span><input type="checkbox" onclick="musicCookie()" id="enableAutoplay"><small>Autoplay Music!</small></span>';
htmlFooter += '</p>';
htmlFooter += '</div>';
htmlFooter += '</div>';
document.write(htmlFooter);

// whatever code copied from GeeksForGeeks. i just need to read the value of the cookie.


function showOneko() {
    var state = document.getElementById("enableOneko").checked;
    document.cookie = "oneko=" + state + ";path=/";
    document.getElementById("oneko").style.display = state ? 'block' : 'none';
}

function musicCookie() {
    var state = document.getElementById("enableAutoplay").checked;
    document.cookie = "autoplay=" + state + ";path=/";
}


// this is kinda messy crap, i know. 
// we need to update the state of oneko based on what we set
// this will also update the cookie
document.getElementById("enableOneko").checked = (getCookieByName("oneko") === 'true');
document.getElementById("enableAutoplay").checked = (getCookieByName("autoplay") === 'true');
showOneko();
