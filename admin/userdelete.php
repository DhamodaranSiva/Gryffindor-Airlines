<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <title>Online Quiz - Quiz List</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php
    include("header.php");
    include("../database.php");
    $id = $_GET['username'];

    $sql = mysqli_query($con, "delete from user where login='$id'");
    header('location:showuser.php');
    ?>