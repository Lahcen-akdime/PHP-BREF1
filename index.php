<?php
include ("header.php");
$id = $_SESSION['id'] ;
?>
<audio autoplay>
<source src="ressourses/videoplayback.m4a">
</audio>
    <main class="container">
        <section class="top-books-section">
            <h3 class="section-title">TOP 10 BOOK</h3>
            <div class="carousel-container">
                <div class="top-book-list">
                    <div class="book-card">
                        <img src="ressourses/large_ce5d4ed6f53d69535c1893a3e14cb41e.jpg" alt="To Sleep in a Sea of Stars" class="book-cover">
                    </div>
                    <div class="book-card">
                        <img src="ressourses/81zXbQP-pWL._SY522_.jpg" alt="Where Good Ideas Come From" class="book-cover">
                    </div>
                    <div class="book-card">
                        <img src="ressourses/61DGTA9gSaL.jpg" alt="Where Good Ideas Come From" class="book-cover">
                    </div>
                    <div class="book-card">
                        <img src="ressourses/OIP (1).webp" alt="The Sum of All Things" class="book-cover">
                    </div>
                    <div class="book-card">
                        <img src="ressourses/OIP.webp" alt="The Water Dancer" class="book-cover">
                    </div>
                                        <div class="book-card">
                        <img src="ressourses/wnObjHpM-scaled.jpeg" alt="Late Migrations" class="book-cover">
                    </div>
                    <div class="book-card">
                        <img src="ressourses/canva-brown-rusty-mystery-novel-book-cover-hG1QhA7BiBU.jpg" alt="Late Migrations" class="book-cover">
                    </div>
                    <div class="book-card">
                        <img src="ressourses/sub-buzz-1228-1576780705-9.jpg" alt="Late Migrations" class="book-cover">
                    </div>

                    <div class="book-card">
                        <img src="ressourses/large_ce5d4ed6f53d69535c1893a3e14cb41e.jpg" alt="To Sleep in a Sea of Stars" class="book-cover">
                    </div>
                    <div class="book-card">
                        <img src="ressourses/61DGTA9gSaL.jpg" alt="Where Good Ideas Come From" class="book-cover">
                    </div>
                    <div class="book-card">
                        <img src="ressourses/81zXbQP-pWL._SY522_.jpg" alt="Where Good Ideas Come From" class="book-cover">
                    </div>
                    <div class="book-card">
                        <img src="ressourses/OIP (1).webp" alt="The Sum of All Things" class="book-cover">
                    </div>
                    <div class="book-card">
                        <img src="ressourses/OIP.webp" alt="The Water Dancer" class="book-cover">
                    </div>
                    <div class="book-card">
                        <img src="ressourses/sub-buzz-1228-1576780705-9.jpg" alt="Late Migrations" class="book-cover">
                    </div>
                    <div class="book-card">
                        <img src="ressourses/OIP (2).webp" alt="Late Migrations" class="book-cover">
                    </div>
                </div>
            </div>
        </section>

        <h3 class="section-title my-book-title">MY BOOK</h3>
        
        <section class="my-book-section">
            <a href="courses_list.php">
            <div class="course-card">
                <div class="card-icon">
                    </div>
                <h4>AFFICHER LES CHAPITRES ET LEURS SECTIONS</h4>
                <ul>
                    <li>LIRE - AJOUTER LES CHAPITRES</li>
                    <li>MODIFIER   -   SUPPRIMER</li>
                </ul>
            </div>
            </a>
            <div class="course-card">
                <a href="playlist.php">
                <div class="card-icon">
                    </div>
                <h4>MON PLAYLIST</h4>
                <ul>
                    <li>L'AFFICHAGE DE PLAYLIST <br><br> LES CHAPITRES PREFERE <br><br></li>
                </ul>
            </div>
            </a>
        </section>

    </main>
    <?php 
    include("footer.php");
    ?>
<script src="script.js" defer></script>
</body>
</html>





