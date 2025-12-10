<?php
include ("header.php");
if(isset($_POST['submit'])){
    $title = $_POST['title'] ;
    $description = $_POST['description'];
    $level = $_POST['level'] ;
    if(empty($title) || empty($description) || empty($level)){
        echo "<script> alert('tout les champs sont obligatoire'); e.preventDefault();</script>";
        echo "tout les champs sont obligatoire <br />" ;
    }
    else{ 
    echo htmlspecialchars($_POST['title']) ;
    echo htmlspecialchars($_POST['description']) ;
    echo htmlspecialchars($_POST['level']) ;
    }
}
if(!empty($_POST['title'])){
    echo htmlspecialchars($_POST['title']) ;
    echo htmlspecialchars($_POST['description']) ;
    echo htmlspecialchars($_POST['level']) ;
    }
?>
    <section class="content">
        <h2 class="page-title">CREATE COURSE</h2>
        
        <div class="form-container">
            
            <form class="course-form" action="courses_create.php" id="myform" method="POST">
                <h3>Ajouter un cours</h3><br>
                
                <input type="text" placeholder="Nom du cours" name="title" >

                <input type="link" placeholder="image descriptif" name="cours-image"> 
                
                <textarea placeholder="Description" name="description" ></textarea>
                
                <label for="level-select">Niveau du cours :</label>
                <br><br>
                <select id="level-select" name="level" >
                    <option value="" disabled selected>Choisir le niveau du cours</option>
                    <option value="Debutant">Debutant</option>
                    <option value="Intermidiare">Intermediaire</option>
                    <option value="Avance">Avance</option>
                </select>
                <br><br>
                
                <button type="submit">Ajouter le cours</button><br><br>
                <button type="button" name="submit" id="show-section-form-btn" class="action-button">
                    Ajouter une section
                </button>
                <!-- <br><br><hr><br>
                <div id="add-section-form-container" style="display: none ;">
                    <form class="section-form">
                        <h4>Nouvelle Section</h4>
                        <input type="text" placeholder="Titre de la section (title)" name="section_title" required>
            <textarea placeholder="Contenu de la section (content)" name="section_content" required></textarea>
            <input type="number" placeholder="Position (position)" name="position" required min="1">
            <hr><br> -->
        </form>

</div>

<!-- <form class="course-form">
    <h3>Modifier un cours</h3>
    <input type="text" placeholder="Cours à modifier">
    <input type="text" placeholder="Nouveau nom">
    <button>Modifier</button>
</form>

<form class="course-form">
    <h3>Supprimer un cours</h3>
    <input type="text" placeholder="Cours à supprimer">
    <button>Supprimer</button>
</form> -->

</div>
</section>
<?php
include ("footer.php");
?>
<script src="script.js" defer></script>
</body>
</html>
