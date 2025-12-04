
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Afficher les Cours</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <!-- HEADER -->
    <header class="header">
        <div class="header-left">
            <div alt="Logo" class="logo"></div>
            <h1 class="title"><span>LIBRARY</span><br><span>SPACE</span></h1>
        </div>

        <nav class="header-nav">
            <a href="index.php" class="nav-btn green">ACCUEIL</a>
            <a href="#affichage.php" class="nav-btn red">COURS</a>
            <a href="geree.php" class="nav-btn yellow">CONDITIONS</a>
        </nav>
    </header>

    <!-- CONTENT -->
    <section class="content">
        <h2 class="page-title">AFFICHER LES COURS</h2>

        <div class="course-list">
            <div class="course-card">
                <h3>HTML</h3>
                <ul>
                    <li>Introduction</li>
                    <li>Balises</li>
                    <li>Formulaires</li>
                    <li>Multimédia</li>
                </ul>
            </div>

            <div class="course-card">
                <h3>CSS</h3>
                <ul>
                    <li>Selectors</li>
                    <li>Flexbox</li>
                    <li>Grid</li>
                    <li>Animations</li>
                </ul>
            </div>

            <div class="course-card">
                <h3>JavaScript</h3>
                <ul>
                    <li>Variables</li>
                    <li>Conditions</li>
                    <li>Fonctions</li>
                    <li>DOM</li>
                </ul>
            </div>
        </div>
    </section>

</body>
</html>
