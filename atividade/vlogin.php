<?php

 $user = $_POST["email"];
 $pass = $_POST['password'];
 $lembrar = $_POST['check'];

 if($user == 'kamily@gmail.com' && $pass == '123'){

     session_start();
     $_SESSION['user'] = $user;
     setcookie('user', $user, time()+ 3600);
     header('location: dash.php');

 }

?>