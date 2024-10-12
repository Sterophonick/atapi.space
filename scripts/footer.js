
var htmlFooter = '<div id="footer">';
htmlFooter += '<div id="separator" style="margin-top:5px; margin-bottom: 5px;">';
htmlFooter += '<br/>';
htmlFooter += '<img width="100%" height="6px" id="spacer" src="/assets/img/global/border.png">';
htmlFooter += '</div>';
htmlFooter += '<div id="message">';
htmlFooter += '<br/>';
if (location.pathname != "/" && location.pathname != "/index.html") htmlFooter += '<a href="..">(Go Back)</a> ';
htmlFooter += '<a href="#top">(Top of Page)</a><br/>'
htmlFooter += '<p>';
htmlFooter += '<img class="pixelArt" src="/assets/img/home/web_button.gif"> <img class="pixelArt" src="/assets/img/global/cc-by-nc.png"><br/>';
htmlFooter += 'made with love 2020-2024 Atapi / Sterophonick<br/>';
htmlFooter += 'any and all mentions of properties not mine belong to their respective owners<br/>';
if(window.location.host == "sterophonick.github.io") htmlFooter += "<div align='center'><a href='https://www.websitecounterfree.com'><img src='https://www.websitecounterfree.com/c.php?d=9&id=60115&s=1' border='0' alt='Free Website Counter'></a><br / ><small><a href='https://www.websitecounterfree.com' title='Free Website Counter'></a></small></div>"
htmlFooter += '<a href="https://github.com/Sterophonick/sterophonick.github.io" target="_blank"><small>Website Source</small></a>';
htmlFooter += '</p>';
htmlFooter += '</div>';
htmlFooter += '</div>';

document.write(htmlFooter);
