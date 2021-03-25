<?php
echo("<script>console.log('PHP: Logout');</script>");
echo("<script>console.log('PHP: " . $_SESSION . "');</script>");
session_start();
unset($_SESSION);
session_destroy();
session_write_close();

echo("<script>console.log('PHP: Formulaire Login');</script>");

header('Location: ../../index.php');
die;

?>