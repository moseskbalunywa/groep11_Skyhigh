
<?php
include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Content">
    <meta name="zweefvliegen, vliegen" content="Keywords">
    <meta name="author" content="Moses Balunywa">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Zweefvlieg club Sky high</title>

    <link rel="stylesheet" href="../css/main.css">

    <link rel="preconnect" href ="https://fonts.googleapis.com">
    <link rel="preconnect" href ="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

</head>
<body>

<nav>

    <div class="Zoekbar"> <form action="" class="search-bar"><input type="text" placeholder="Zoeken" name="q"><button type="submit"></button> </form></div>
    <label class="logo"><img src="/Afbeeldingen/Sky%20high%20(Transparant).png" height="110"></label>
    <ul>
        <li><a class ="active" href="index.html">Home</a></li>
        <li><a href="#">Reserveren</a></li>
        <li><a href="Media.html">Media</a></li>
        <li><a href="weer.html">Weer</a></li>
        <li><a href="contact.html" href="#">Contact</a></li>

    </ul>

</nav>


<section>
    <div class="Center">
        <div class="Inloggen_Text">Inloggen</div>
        <form name = "form" action="login.php" method="POST">
        <div class="Knoppen1">
            <button name="submit" class="SigninKnop">Inloggen</button>
        </div>


        <div class ="InputEmail">
            <input type="Text" placeholder="Email" name="emailadress" size="30px">
            <div class="EmailInput_Stripe"></div>
        </div>

        <div class ="InputWachtwoord">
            <input type="Text" placeholder="Wachtwoord" name="wachtwoord" size="30px">
            <div class="WachtwoordInput_Stripe"></div>
        </div>
        </form>

        <div class="Registreren_Vakje"> Geen account?
            <a class="Registreren_knop" href="register.html.php">Registreren</a>
        </div>
    </div>

</section>


