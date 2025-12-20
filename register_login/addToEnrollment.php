<?php
session_start();
include "../config.php" ;
if($_GET['case']==0){
    $userid = $_SESSION['id'] ;
    $courseid = $_GET['courseId'] ;
    $insertion = "INSERT INTO enrollments(client_id,selectedcourse_id) VALUES($userid,$courseid)";
    $operation = $connection -> query($insertion) ;
header("location: ../courses_list.php") ;
}
elseif($_GET['case']==1){
     $userid = $_SESSION['id'] ;
    $courseid = $_GET['courseId'] ;
    $delete = "DELETE FROM enrollments WHERE client_id = '$userid' AND selectedcourse_id = '$courseid'";
    $connection -> query($delete) ;
    header("location: ../courses_list.php");
}
else{
 header("location: ../courses_list.php") ;
}  
?>