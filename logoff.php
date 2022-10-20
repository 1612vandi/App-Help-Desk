<?php
session_start();

//destrindo  variavel todas as variaveis de de sessão

session_destroy();
header('Location: index.php?');
?>