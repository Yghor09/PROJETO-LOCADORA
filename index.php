<?php
session_start();
$error_message = "";

if (isset($_POST['saopaulo'])):
	require_once("app/database/connect.php");

	$user=$_POST['user'];
	$pass=sha1($_POST['pwd']);
	
	$sql = 'SELECT * FROM USUARIO WHERE nome="'.$user.'" and senha="'.$pass.'"';
	$verificar = $conn->query($sql);

	if($verificar->fetch()) {
		$_SESSION['user'] = $user;
		header('location: app/home.php');
        //echo $sql;s
	} else {
		$error_message = "Dados errados!";	
	} 
endif;
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <title>Tela de Login</title>
               
    </head>
	<body>
        <div class="Login">
            <h1>Login</h1>
            <form method="POST" action="">
                <input type="text" name="user" placeholder="Usuário">
                <input type="password" name="pwd" placeholder="Senha">
                <input type="submit" name="saopaulo" value="Enviar">
                
            </form>
        </div>

        <!-- Mensagem de erro -->
        <?php if (!empty($error_message)): ?>
            <div id="error-notification"><?= htmlspecialchars($error_message) ?></div>
        <?php endif; ?>
    </body>
</html>
    