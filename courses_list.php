<?php
include "config.php";
include ("header.php");
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
                        <li><div class="imageplace" style="background-image: url(<?php echo $element['image'];?>);background-size:cover;height:8.7rem;border-radius:10px;"></div></li>
                        <li><?php echo $element['description']; ?></li>
                        <li><?php echo $element['course_level']; ?></li>
                        <li><?php echo $element['created_at']; ?></li>
                    </ul>
                    <div class="container-icons">
                    <a class="deleteicon" href="./courses_delete.php?id=<?php echo $element['id']?>"></a>
                    <a class="editicon"  href="./courses_edit.php?id=<?php echo $element['id']?>"></a>
                    </div>
                </div>
            <?php }; ?>
        </div>
    </section>
    <div id='permessionmodal' style="display:none"><h2>Are you sure ?</h2>
<div><button class="nav-item active" style="background-color:green;">yes</button>
<button class="nav-item conditions">no</button>
</div>
</div>
<?php
include ("footer.php");
?>
<script src="script.js" defer></script>
</body>

</html>