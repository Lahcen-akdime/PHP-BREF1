<?php
session_start() ;
$id = $_GET['id'] ;
if($id){
    require_once "config.php";
    $operation = "DELETE FROM courses WHERE id = $id";
    $connection -> query($operation);
    header("location: ./courses_list.php");
}
else{
    echo "<script>alert('failed')</script>";
    exit;
}
// echo "<script>alert('Le course est supprimer avec succée ✅')</script>";
?>