<?php
include ("header.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $title = $_POST['title'] ;
    $image = $_POST['cours-image'] ;
    $description = $_POST['description'];
    $level = $_POST['level'] ;
    if(empty($title) || empty($description) || empty($level)){
        echo "<script> alert('tout les champs sont obligatoire');</script>";
    }
    elseif ($level != "Débutant" && $level != "Intermédiaire" && $level != "Avancé") {
        echo "<script> alert('Level introuvable');</script>";
    }
    else{ 
        try {
        require_once "config.php";
        $insertion =  "INSERT INTO courses(title,image,description,course_level)
        VALUES('$title','$image','$description','$level');";
        $connection -> query($insertion);
        header("location: ./courses_list.php");
        } catch (PDOException $e) {
            die("Query failed : ".$e->getMessage());
        }
    }
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
                    <option value="Débutant">Débutant</option>
                    <option value="Intermédiaire">Intermédiaire</option>
                    <option value="Avancé">Avancé</option>
                </select>
                <br><br>
                
                <button type="submit">Ajouter le cours</button><br><br>
            </form>
            
        </div>
    </div>
    </section>

<?php
include ("footer.php");
?>
<script src="script.js" defer></script>
</body>
</html>
