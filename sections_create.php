<?php
include_once "header.php";
$id = $_GET['id'];
if($_SERVER['REQUEST_METHOD']=='POST'){
    $sectionTitle = $_POST["title"] ;
    $sectionContent = $_POST["content"] ;
    $sectionPosition = $_POST["position"] ;
    if(empty($sectionTitle) || empty($sectionContent) || empty($sectionPosition)){
        echo "<script> alert('l'operation annulée , tout les champs sont obligatoire');</script>";
    }
    else{
        include_once "config.php";
        $insertion = "INSERT INTO sections (title,content,position,course_id)
        VALUES('$sectionTitle','$sectionContent','$sectionPosition','$id')";
        $connection -> query($insertion);
        header("location: ./sections_list.php?id=$id");
    }
}
?>

<form class="add-section-form" method="POST" action="sections_create.php?id=<?php echo $_GET['id'] ?>">
    
    <div class="form-group">
        <label for="title">Titre de la section</label>
        <input type="text" id="title" name="title" placeholder="Ex : Introduction" >
    </div>

    <div class="form-group">
        <label for="content">Contenu</label>
        <textarea id="content" name="content" rows="4" placeholder="Description de la section..." ></textarea>
    </div>

    <div class="form-group">
        <label for="position">Position</label>
        <input type="number" id="position" name="position" min="1" placeholder="Ex : 1" >
    </div>

    <a href=""><button type="submit" class="submit-btn">
        Ajouter la section
    </button></a>

</form>


</body>
<?php 
include_once "footer.php"
?>
</html>