<?php
include_once "header.php";
include_once "config.php";
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $courseid = $_GET['id'];
try {
    $CourseSections = "SELECT * FROM sections WHERE course_id = $courseid ORDER BY position ASC" ;
    $sections = $connection -> query($CourseSections) ;
} catch (\Throwable $th) {

}
}
?>
<section class="content">
    <div class="sections-container">
       
        <?php
foreach($sections as $element){
    echo 
    "<div class='section-card'>
        <span class='section-position'>$element[position]</span>
        <h3 class='section-title'>$element[title]</h3>

        <p class='section-content'>
           $element[content]
        </p>
    </div>" ;
}
?>
        </div>
        <br><br>
        <button class="add-section-btn">
    + Ajouter une section
</button>
</section>



<?php
include_once "footer.php" ;
?>
</body>
</html>