<?php
include "config.php";
include ("header.php");
$mysqli = "SELECT * FROM courses";
$mydata = mysqli_query($connection, $mysqli);
?>
    <!-- CONTENT -->
    <section class="content">
        <h2 class="page-title">AFFICHER LES COURS</h2>

        <div class="course-list">
            <?php
            foreach ($mydata as $element) {
            ?>
                <div class="course-card">
                    <h3><?php echo $element['title']; ?></h3>
                    <ul>
                        <li><div class="imageplace" style="background-image: url(<?php echo $element['image'];?>);background-size:cover;height:8rem;border-radius:10px;"></div></li>
                        <li><?php echo $element['description']; ?></li>
                        <li><?php echo $element['course_level']; ?></li>
                        <li><?php echo $element['created_at']; ?></li>
                    </ul>
                    <div class="container-icons">
                    <div class="deleteicon" onclick="permession()"></div>
                    <div class="editicon"></div>
                    </div>
                </div>
            <?php }; ?>

        </div>
    </section>
<?php
include ("footer.php");
?>
<div id="permessionmodal"></div>
<script src="script.js" defer></script>
</body>

</html>