<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="assets/img/global/favicon.ico">
<link rel="stylesheet" href="/assets/css/main.css">
<meta name="darkreader-lock">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Atapi's Domain! :: Content Interstitial</title>
</head>

<body>
<div class="boxConstraint">
<div class="window landWin1">

 <h1><img style="vertical-align:middle" src="/assets/img/interstitial/icon.png"> Content Interstitial</h1>
 <p>
 You are about to leave my site, <a href="https://atapi.space/">atapi.space</a>.
 </p>

 <?php
 echo 'Your destination is ' . $_GET['name'] . '.';
 ?>

 <p>
 This site contains content that some may consider to be potentially disturbing, offensive or otherwise <u><b><i>Not Safe For Work (NSFW)</i></b></u>.<br/><br/>

 By proceeding, you agree to acknowledge the nature of your destination page and take full responsibility for your decision to access it. Furthermore, you confirm that you are of legal age in your jurisdiction. <br/>
 </div>

 <br/>

 <div class="window landWin2">
 <p>
 To proceed, click the following link:<br/>

 <?php
 echo '<a href="' . $_GET['dest'] . '">View Site!</a>'
 ?><br/>

 <br/>
 To go back, click this link:<br/>
 <a href="javascript:history.back()">Nevermind, take me back!</a><br/>
 </p>
</div>
<br/>
<br/>
</div>
</body>

<script>

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

if(getCookieByName("bganim") == 'true') {
    document.body.classList.add('no-bg-anim');
} else {
    document.body.classList.remove('no-bg-anim');
}

</script>

</html>
