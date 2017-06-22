<?php
    session_start();
    if(!isset($_SESSION['usuario_online']) OR ($_SESSION['usuario_online'] = false) ){
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>

	<div class="social">

		<a href="verifica_usuario.php?acao=sair" class="sair">sair</a>


        <img src="http://www.dolphinmarinemagic.com.au/_System/images/bg-faq.jpg" alt="" width="200" height="200">
        <h3>Welcome to DolfhinLand!</h3>
        </div>

</body>
    <div id="div_logout">
        <form method="POST" action="logout.php">
            <input id="logout_butt" type="submit" name="logout_form" value="Sair">
        </form>
    </div>

</html>
