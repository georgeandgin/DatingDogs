<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <title>Dating Dogs</title>
    <?php include ('../components/config.php');?>
    <?php include ('../components/connect.php');?>
</head>
<header>
<a href="../components/api.php"><img id="headerbone" src="../assets/bone.png" alt="DOG BONE"></a>
<div class="links">

<?php
    if (!isset($_SESSION["username"])) {
        echo "<h5><a href='../components/register.php'><i>register</i></a></h5>";
        echo "<h5><a href='../components/login.php'><i>login</i></a></h5>";
    } else {
        echo "<h5><a href='userProfile.php'><i>profile</i></a></h5>";
        echo "<h5><a href='../components/logout.php'><i>logout</i></a></h5>";
    }
?>

</div>
<br>
<h1><a href="../pages/index.php">Dating Dogs </a></h1>

</header>
