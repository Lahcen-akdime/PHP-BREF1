<?php
include ("header.php");
?>
    <section class="content">
        <h2 class="page-title">GÉRER LES COURS</h2>
        
        <div class="form-container">
            
            <form class="course-form">
                <h3>Ajouter un cours</h3>
                
                <input type="text" placeholder="Nom du cours" name="title" required> 
                
                <textarea placeholder="Description" name="description" required></textarea>
                
                <label for="level-select">Niveau du cours :</label>
                <br><br>
                <select id="level-select" name="level" required>
                    <option value="" disabled selected>Choisir le niveau du cours</option>
                    <option value="Debutant">Débutant</option>
                    <option value="Intermidiare">Intermédiaire</option>
                    <option value="Mastery">Mastery</option>
                </select>
                <br><br>
                
                <button type="click" name="submitbtn">Ajouter le cours</button><br><br>
                <button type="button" id="show-section-form-btn" class="action-button">
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
<script src="script.js"></script>
</body>
</html>
