<?php
session_start();
unset($_SESSION["usuario"]);
unset($_SESSION["nome"]);
unset($_SESSION["tipo"]);
session_destroy();
//saindo de todas sessões q estavam abertas

header("Location: index.php");
exit();
