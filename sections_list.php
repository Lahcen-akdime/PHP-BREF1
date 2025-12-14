<?php
include_once "header.php";
include_once "config.php";
$courseid ;
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $courseid = $_GET['id'];
    $operation = "SELECT * FROM courses WHERE id = $courseid LIMIT 1" ;
    $courstitle = $connection -> query($operation) ;

try {
    $CourseSections = "SELECT * FROM sections WHERE course_id = $courseid ORDER BY position ASC" ;
    $sections = $connection -> query($CourseSections) ;
} catch (\Throwable $th) {

}
}
?>
    <?php 
     foreach($courstitle as $element){
        echo "<h1 style='margin-left: 2.5rem;'>SECTIONS OF $element[title] : </h1>" ;
        } ?>
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
        <div class='container-icons'>
                        <a class='deleteicon' href='./sections_delete.php?id=$element[id]'></a>
                        <a class='editicon'  href='./sections_edit.php?id=$element[id]'></a>
                        </div> 
    </div>";
}
?>
        </div>
    </section>
    <br>
    <a href="sections_create.php?id=<?php echo "$courseid" ?>"><button class="add-section-btn">
    + Ajouter une section
</button></a>



<?php
include_once "footer.php" ;
?>
</body>
</html>