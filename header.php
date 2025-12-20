<?php
session_start() ;
if(!$_SESSION['id']){
header('location: register_login/login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Space</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <div class="logo">
           <div class="logopic"></div>
            <span>YOUR BOOK</span>
        </div>
        <nav class="nav-bar">
            <a href="index.php" class="nav-item active">ACCUEIL</a>
            <a href="courses_list.php" class="nav-item">COURS</a>
            <a href="courses_create.php" class="nav-item conditions">CREATE A COURSE</a>
            <a href="favourite.php" class="nav-item">FAVOURITE</a>
            <a href="dashboard.php" class="nav-item">DASHBOARD</a>
            <a href="register_login/logout.php" class="nav-item active">LOGOUT</a>

            <!-- <a href="courses_create.php" class="nav-item active">SAVE A COURSE</a> -->
        </nav>
    </header>

