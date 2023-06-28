<?php
include "connection.php";


if(isset($_POST['registersubmit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    global $conn;

    $sql = "select * from users where email = '$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count_email = mysqli_num_rows($result);



    if($count_email == 0 ){
        if($password == $cpassword){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql ="INSERT INTO users( email, password) VALUES ('$email', '$hash')";
            $result = mysqli_query($conn, $sql);
            if($result){
                header("Location: weer.html");
            }



        }
    }
    else{
        if ($count_email >0){
            echo '<script>
         window.location.href = "register.html.php";
         alert("Username already exist)
         </script>';
        }

    }
}
?>
