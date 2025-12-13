<?php
include "header.php" ;
include_once "config.php";
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $id = $_GET['id'];
    $_SESSION['id'] =  $id;
    echo"$_SESSION[id]";
    
try {
    $selectedcourse = "SELECT * FROM courses WHERE id = $id" ;
    $ok = $connection -> query($selectedcourse) ;
} catch (\Throwable $th) {
    throw $th;
}
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $title = $_POST['title'] ;
    $image = $_POST['cours-image'] ;
    $description = $_POST['description'];
    $level = $_POST['level'] ;
    $id = $_POST['id'] ;
    if(empty($title) || empty($description)){
        echo "<script> alert('tout les champs sont obligatoire');</script>";
    }
    elseif ($level != "Débutant" && $level != "Intermédiaire" && $level != "Avancé") {
        echo "<script> alert('Level introuvable');</script>";
    }
    else{ 
        try {
        $update =  "UPDATE courses  SET title ='$title', image = '$image', description = '$description',course_level = '$level' WHERE id = $id;";
        $connection -> query($update);
        header("location: ./courses_list.php");
        } catch (PDOException $e) {
            die("Query failed : ".$e->getMessage());
        }
    }
}
?>
 <section class="content">
        <h2 class="page-title">EDIT THE COURSE</h2>
        <div class="form-container">
<form class="course-form" method="POST" action="courses_edit.php">
    <h3>Modifier le cours <br><br></h3>
    <?php 
    foreach ($ok as $element) {
        echo "
        <input type='hidden' name='id' value='$element[id]'>
        <input type='text' name='title' placeholder='Titre du Cours à modifier'value= '$element[title]'>
        <textarea placeholder='Description' name='description'>$element[description]</textarea>
        <input type='text' name='cours-image' placeholder='Nouvelle Description du cours'value= '$element[image]'>
        <select id='level-select' name='level'>
                        <option value='$element[course_level]'>$element[course_level]</option>
                        <option value='Débutant'>Débutant</option>
                        <option value='Intermédiaire'>Intermédiaire</option>
                        <option value='Avancé'>Avancé</option>
                    </select>
                    <br><br>" ;
    }
    ?>
    <button type="submit">Modifier</button>
</form>
        </div>
 </section>

<?php include "footer.php" ?>
</body>
</html>