<?php
include("connection.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  href="/css/register.css">
	<title>Login bij skyhigh</title>
</head>
<body>
<nav>
    <div class="Zoekbar"> <form action="" class="search-bar"><input type="text" placeholder="Zoeken" name="q"><button type="submit"></button> </form></div>
    <label class="logo"><img src="/Afbeeldingen/Sky%20high%20(Transparant).png" height="110"></label>
    <ul>
        <li><a class ="active" href="index.html.php">Home</a></li>
        <li><a href="#">Reserveren</a></li>
        <li><a href="Media.html">Media</a></li>
        <li><a href="weer.html">Weer</a></li>
        <li><a href="contact.html" href="#">Contact</a></li>

    </ul>

</nav>
     <div class="loginContainer">
        <h2>Maak een account</h2>
         <form name="form" action="registreren.php" method="POST">
         <label class="email">Vul een email in</label>
             <br>
         <input name="email" type="email" placeholder="email@adres.nl" required >
             <br>
         <label class="wachtwoord">Vul een wachtwoord in</label>
             <br>
         <input name="password" type="password" placeholder="* * * * * * * *" required minlength="3">
             <br>
                <label>Herhaal wachtwoord</label>
             <br>
         <input name="cpassword" type="password" placeholder="* * * * * * * *" required minlength="3">
             <br>
             <button name="registersubmit" id="submitButton">Registreer</button>
         </form>
      <a href="index.html.php" class="linksLogin">Al een account? meld je hier aan!</a>

    </div>
</body>
</html>