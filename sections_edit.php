<?php

use Dba\Connection;

include "header.php" ;
include_once "config.php";
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $id = $_GET['id'];
    
try {
    $selectedsection = "SELECT * FROM sections WHERE id = $id" ;
    $ok = $connection -> query($selectedsection) ;
} catch (\Throwable $th) {
    throw $th;
}
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
     $sectionTitle = $_POST["title"] ;
    $sectionContent = $_POST["content"] ;
    $sectionPosition = $_POST["position"] ;
    $courseid = $_POST["courseid"] ;
    $id = $_POST['id'];
    if(empty($sectionTitle) || empty($sectionContent) || empty($sectionPosition)){
        echo "<script> alert('l'operation annulée , tout les champs sont obligatoire');</script>";
    }
    else{ 
        try {
        $update =  "UPDATE sections  SET title ='$sectionTitle', content = '$sectionContent', position = '$sectionPosition' WHERE id = $id;";
        $connection -> query($update);
        header("location: ./sections_list.php?id=$courseid");
        } catch (PDOException $e) {
            die("Query failed : ".$e->getMessage());
        }
    }
}
?>
 <section class="content">
        <h2 class="page-title">EDIT THE SECTION</h2>
        <div class="form-container">
<form class="add-section-form" method="POST" action="sections_edit.php">
    <h3>Modifier la section <br><br></h3>
    <?php 
    foreach ($ok as $element) {
        echo "
        <input type='hidden' name='id' value='$element[id]'>
        <input type='hidden' name='courseid' value='$element[course_id]'>
         <div class='form-group'>
        <label for='title'>Titre de la section</label>
        <input type='text' id='title' name='title' placeholder='Ex : Introduction' value = '$element[title]'>
    </div>

    <div class='form-group'>
        <label for='content'>Contenu</label>
        <textarea id='content' name='content' rows='4' placeholder='Description de la section...' >$element[content]</textarea>
    </div>

    <div class='form-group'>
        <label for='position'>Position</label>
        <input type='number' id='position' name='position' min='1' placeholder='Ex : 1' value = '$element[position]'>
    </div>
    <button type='submit' class='add-section-btn' id='centrer'>Modifier</button>
" ;
    }
    ?>
</form>
        </div>
 </section>

<?php include "footer.php" ?>
</body>
</html>