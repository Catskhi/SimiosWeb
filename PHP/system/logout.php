<?php
session_start();
session_destroy();
header('Location: http://localhost/Projeto_S%C3%ADmiosWeb/SimiosWeb/PHP/index.php');
exit();