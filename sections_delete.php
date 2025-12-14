<?php
$id = $_GET['id'] ;
if($id){
    require_once "config.php";
    $operation = "DELETE FROM sections WHERE id = $id";
    $connection -> query($operation);
   header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
else{
    echo "<script>alert('failed')</script>";
    exit;
}
?>