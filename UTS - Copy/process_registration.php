<?php
session_start();



$_SESSION['form_data'] = $_POST;

header('Location: success_page.php');
exit();
?>
