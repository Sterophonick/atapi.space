
<!DOCTYPE>
<html>
<head>
<link rel="shortcut icon" href="assets/img/global/favicon.ico">
<link rel="stylesheet" href="/assets/css/landing.css">
<meta name="darkreader-lock">
<title>Atapi's Homepage! :: Content Interstitial</title>
</head>

<body>
<div class="wrapper">
<div class="mainContainer container1">

 <h1><img style="vertical-align:middle" src="\assets\img\interstitial\icon.png"> Content Interstitial</h1>
 <p>
 You are about to leave my site, <a href="https://atapi.space/">atapi.space</a>.
 </p>

 <?php
 echo 'Your destination is ' . $_GET['name'] . '.';
 ?>

 <p>
 This site contains content that some may consider to be potentially disturbing, offensive or otherwise <b><i>Not Safe For Work (NSFW)</i></b>.<br/><br/>

 By proceeding, you agree to acknowledge the nature of your destination page and take full responsibility for your decision to access it. Furthermore, you confirm that you are of legal age in your jurisdiction. <br/>
 </div>

 <br/>

 <div class="mainContainer container2">
 <p>
 To proceed, click the following link:<br/>

 <?php
 echo '<a href="' . $_GET['dest'] . '">View Site!</a>'
 ?><br/>

 <br/>
 To go back, click this link:<br/>
 <a href="javascript:history.back()">Nevermind!</a><br/>
 </p>
</div>
<br/>
<br/>
</div>
</body>
</html>
