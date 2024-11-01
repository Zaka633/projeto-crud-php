<?php 
session_start();


if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
{

    unset($_SESSION['email']($email));
    unset($_SESSION['senha']($senha));
    header('location: login.php');

}

?>



<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA</title>
</head>
<body>
    
<img src="logo.png" class="logo">
<style>
 body{  font-family: Arial, Helvetica, sans-serif;
        background-image: url(hospital.png);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: bottom center;
        background-attachment: fixed;
        display: flex;
        flex-direction: column;
        height: 100vh;
        margin: 0; 
    }

.logo{
    
    position: absolute;
    width: 47%;
    left: 25%;
    background-color: rgba(0, 0, 0, 0.2);
    border: black;
    padding: 10px
}

</style>

    
</body>
</html>