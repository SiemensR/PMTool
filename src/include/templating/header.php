<?php
global $title;
if ($title == null) {
    $title = "Default page name";
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="../../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../dist/css/main.min.css" rel="stylesheet">
    <title><?php echo($title);?></title>