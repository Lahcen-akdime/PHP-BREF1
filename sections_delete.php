<?php
$id = $_GET['id'] ;
if($id){
    require_once "config.php";
    $operation = "DELETE FROM sections WHERE id = $id";
    $connection -> query($operation);
    $select = "SELECT * FROM sections WHERE course_id = $id LIMIT 1" ;
    $firstSection = $connection -> query($select);
    foreach($firstSection as $element){
    header("location: ./sections_list.php?id=$element[course_id]");
    }
}
else{
    echo "<script>alert('failed')</script>";
    exit;
}
?>