<?php
include "header.php" ;
include "config.php" ;
// Nombre Total de Cours //
$operation = "SELECT COUNT(id) FROM courses ; " ;
$totale = $connection -> query($operation) ;
$result = $totale -> fetch_row() ;
// Total des Utilisateurs //
$operation2 = "SELECT COUNT(id) FROM client ; " ;
$totale2 = $connection -> query($operation2) ;
$result2 = $totale2 -> fetch_row() ;
// Total des Course favoré //
$operation3 = "SELECT COUNT(DISTINCT selectedcourse_id) FROM enrollments ; " ;
$totale3 = $connection -> query($operation3) ;
$result3 = $totale3 -> fetch_row() ;
// populaire Course //
$operation4 = "SELECT selectedcourse_id, count(*) as cnt
from enrollments 
group by selectedcourse_id
order by cnt desc
LIMIT 1 ;";
$totale4 = $connection -> query($operation4) ;
$populaireid = $totale4 -> fetch_row() ;
$search = "SELECT title FROM courses WHERE id = $populaireid[0]" ;
$operation5 = $connection -> query($search) ;
$result4 = $operation5 -> fetch_row() ;
// moyen des sections par cours //
$requette1 = "SELECT COUNT(*) FROM sections ;";
$operation7 = $connection -> query($requette1) ;
$sectiontotale = $operation7 -> fetch_row() ;
$moyen = $sectiontotale[0] / $result[0] ;
// course.sections > 5 //
$operation8 = "SELECT DISTINCT courses.title , COUNT(sections.id) as num
FROM courses INNER JOIN sections 
WHERE courses.id = sections.course_id
GROUP BY title HAVING num > 5" ;
$totale8 = $connection -> query($operation8) ;
// inscription date > year date //
$operation10 = "SELECT name , email , ladate 
FROM client WHERE ladate > '2025-01-01 00:00:00' ;" ;
$totale10 = $connection -> query($operation10) ;
$operation11 = "SELECT DISTINCT enrollments.selectedcourse_id 
FROM courses LEFT JOIN enrollments
ON courses.id = enrollments.selectedcourse_id" ;
$totale11 = $connection -> query($operation11) ;
$result5 = $totale11 -> fetch_row() ;
?>



<h1 style='text-align : center;color:white'>___________ STATISTICS  PLACE ___________</h1>
<!-- ===== STATS ===== -->
 <main class="content">
<div class="stats">
    <div class="card yellow">
        <h2><?php echo $result[0] ;?></h2>
        <p>Nombre Total de Cours</p>
    </div>

    <div class="card">
        <h2><?php echo $result2[0] ;?></h2>
        <p>Total des Utilisateurs</p>
    </div>

    <div class="card red">
        <h2><?php echo $result3[0] ;?></h2>
        <p>Total des Course favoré</p>
    </div>

    <div class="card">
        <h3 style="font-size: 1.2rem;"><?php echo $result4[0] ;?></h3><br>
        <p>Cours le Plus Populaire ⭐</p>
    </div>

    <div class="card yellow">
        <h2><?php echo $moyen ;?></h2>
        <p>Nombre Moyen de Sections par cours</p>
    </div>
</div>

<!-- ===== TABLE 1 ===== -->
<div class="section">
<h3>📘 Cours ayant plus de 5 sections</h3>
<table>
<tr>
    <th>Cours</th>
    <th>Nombre de sections</th>
</tr>
<?php 
foreach($totale8 as $element){
echo "<tr><td>$element[title] </td><td>$element[num] </td></tr>" ;
}
 ?>
</table>
</div>

<!-- ===== TABLE 2 ===== -->
<div class="section">
<h3>👤 Utilisateurs inscrits cette année</h3>
<table>
<tr>
    <th>Nom</th>
    <th>Email</th>
    <th>Date</th>
</tr>
<?php 
foreach($totale10 as $element){
    echo "<tr><td>$element[name]</td><td>$element[email]</td><td>$element[ladate]</td></tr>";
}
?>
</table>
</div>

<!-- ===== TABLE 3 ===== -->
<div class="section">
<h3>📑 Cours sans inscription</h3>
<table>
<tr>
    <th>Cours</th>
    <th>Date création</th>
</tr>
<tr><td>Python Débutant</td><td>2024-11-01</td></tr>
</table>
</div>

<!-- ===== TABLE 4 ===== -->
<div class="section">
<h3>🕒 Dernières inscriptions</h3>
<table>
<tr>
    <th>Utilisateur</th>
    <th>Cours</th>
    <th>Date</th>
</tr>
<tr><td>Yassine</td><td>PHP Avancé</td><td>2025-12-15</td></tr>
<tr><td>Imane</td><td>JavaScript</td><td>2025-12-14</td></tr>
</table>
</div>
</main>
</body>
</html>