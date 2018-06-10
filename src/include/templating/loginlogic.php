<?php
session_start();
if(!isset($_SESSION['userid'])) {
    die('<head><link href="../../../dist/css/main.min.css" rel="stylesheet"></head><link><body><div class="errorLogin">The contents are available only after <a href="../pages/login.php">login</a></div></body>');
}
//Abfrage der Nutzer ID vom Login
$user = $_SESSION['name'];
