<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img src="logo.png" class="logo">
    
    <div class="Login">
        <h1>Login</h1>
        <form action="testlogin.php" method="post">
        <input type="text" name="email" placeholder="Email">
        <br><br>
        <input type="password" name="senha" placeholder="Senha">
        <br><br>
        <button type="submit" class="botao" name="submit">Enviar</button>
        </form>
    </div>
    
</body>
</html>
