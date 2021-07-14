<?php
if (!$_SESSION['usuario']) {
    header('Location: http://localhost/Projeto_S%C3%ADmiosWeb/SimiosWeb/PHP/index.php');
    exit();
}