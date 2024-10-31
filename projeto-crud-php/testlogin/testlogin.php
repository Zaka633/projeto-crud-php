<?php 
 session_start();
if(isset($_POST['submit']) &&   !empty($_POST['email']) &&  !empty($_POST['senha']))
{

    include_once('config.php')
    $email = $_POST['email']
    $senha = $_POST['senha']
    $sql = "SELECT * FROM usuarios WHRE email = '$email' and senha = '$senha'";
    $result = $conexao->query($sql);

    if(mysqli_num_rows($result) < 1)
    {

        unset($_SESSION['email'] = $email;)
        unset($_SESSION['senha'] = $senha;)
        header('location: login.php');
    }else
    {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('location: sistema.php');
    }
}else 
{

    header('location: login.php')

}



?>