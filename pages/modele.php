<?php
    require(".././inc/fonctions.php");
    session_start();

    $page= $_GET['page'];
    $page_format= $page.".php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page ?></title>
    <link rel="stylesheet" href=".././assets/css/style.css">
    <link href=".././assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href=".././assets/bootstrap-icons/font/bootstrap-icons.css">   
</head>
<body>
    <div class="container">
        <header>
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <a class="navbar-brand fw-bold" href="#">Management</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Home
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="modele.php?page=listedepartements">Liste des departements</a></li>
                                    <li><a class="dropdown-item" href="modele.php?page=recherche">Recherche</a></li>
                                    <li><a class="dropdown-item" href="modele.php?page=emploi">Liste d'emploi</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div> 
                </div>   
            </nav>
        </header>
        <main>
            
                <?php include($page_format);?>
            
        </main>
        <footer class="mt-4">
            <p class="text-center">&copy; 2025 by Bryan and Hasina</p>
        </footer>
    </div>
    <script src=".././assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>