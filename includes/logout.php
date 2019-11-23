<?
session_start();
session_destroy();
header('Location: bookcrossing.php');
exit();
?>