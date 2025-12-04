<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gérer les Cours</title>
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
            <a href="affichage.php" class="nav-btn red">COURS</a>
            <a href="#geree.php" class="nav-btn yellow">CONDITIONS</a>
        </nav>
    </header>

    <!-- CONTENT -->
    <section class="content">
        <h2 class="page-title">GÉRER LES COURS</h2>

        <div class="form-container">

            <form class="course-form">
                <h3>Ajouter un cours</h3>
                <input type="text" placeholder="Nom du cours">
                <textarea placeholder="Description"></textarea>
                <button>Ajouter</button>
            </form>

            <form class="course-form">
                <h3>Modifier un cours</h3>
                <input type="text" placeholder="Cours à modifier">
                <input type="text" placeholder="Nouveau nom">
                <button>Modifier</button>
            </form>

            <form class="course-form">
                <h3>Supprimer un cours</h3>
                <input type="text" placeholder="Cours à supprimer">
                <button>Supprimer</button>
            </form>

        </div>

    </section>

</body>
</html>
