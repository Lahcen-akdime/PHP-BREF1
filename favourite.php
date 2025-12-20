<?php
include ("header.php");
include ("config.php");
$id = $_SESSION['id'] ;
// $join = "SELECT course.*  from enrollement inner join course on enrollement.courseid = course.id where  enrollement.userid   = :user_id"
$join = "SELECT courses.* , enrollments.selectedcourse_id
         from enrollments inner join courses 
         on enrollments.selectedcourse_id = courses.id where enrollments.client_id = $id";
$newtable = $connection -> query($join) ;
$all = $newtable -> fetch_all() ;
?>
<section class="content">
        <h2 class="page-title">COURS PRÉFÉRÉS</h2>
           
        <div class="course-list">
            <?php
            foreach ($all as $element) {
                ?>
                <div class="course-card">
                    <a class="selected-favorite2" href="./register_login/removeInEnrollment.php?id=<?php echo$element[0]?>"></a>
                    <a name ="<?php echo $element[1]; ?>"></a>
                    <h3><?php echo $element[1]; ?></h3>
                    <ul>
                        <li><div class="imageplace" style="background-image: url(<?php echo $element[3];?>);background-size:cover;height:8.7rem;border-radius:10px;"></div></li>
                        <li><?php echo $element[2]; ?></li>
                        <li><?php echo $element[4]; ?></li>
                        <li><?php echo $element[5]; ?></li>
                    </ul>
                </div>
            <?php }; ?>
        </div>
</section>
</body>
</html>