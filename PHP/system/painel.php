<?php
session_start();
include('verifica_login.php');
$cookie_name = $_SESSION['usuario'];
$cookie_value = $_SESSION['usuario'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>

<h2>Olá <?php echo $_SESSION['usuario']; ?></h2>
<h2><a href="logout.php">Sair</a></h2>