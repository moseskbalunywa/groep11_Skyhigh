<?php
include "connection.php";



if(isset($_POST['submit'])){
    $email = $_POST['emailadress'];
    $password = $_POST['wachtwoord'];

     global $conn;
     $sql = "select * from users where email = '$email' and password = '$password'";
     $result = mysqli_query($conn, $sql);
     $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
     $count = mysqli_num_rows($result);
     if($count == 1){
         header("Location: weer.html");
     }
     else{
         echo '<script>

         window.location.href = "index.html.php";
         alert("Login niet geslaagd. Foute Email of Wachtwoord")
         
         </script>';
     }
}




?>


