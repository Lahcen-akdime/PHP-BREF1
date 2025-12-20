<?php
session_start() ;
include "../config.php" ;
$id = $_GET['id'] ;
$userid = $_SESSION['id'] ;
        $delete = "DELETE FROM enrollments WHERE client_id = '$userid' AND selectedcourse_id = '$id'";$connection -> query($delete) ;
         header("location: ../favourite.php");

?>