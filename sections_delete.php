<?php
$id = $_GET['id'] ;
if($id){
    require_once "config.php";
    $operation = "DELETE FROM sections WHERE id = $id";
    $connection -> query($operation);
    header("location: ./courses_list.php");
}
else{
    echo "<script>alert('failed')</script>";
    exit;
}
?>