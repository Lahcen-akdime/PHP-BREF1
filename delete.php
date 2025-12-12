<?php
header("location: ./index.php");
$id = $GET['id'] ;
if($id){
require_once "config.php";
$operation = "DELETE FROM courses WHERE id = $id";
$connection -> query($operation);
}
?>