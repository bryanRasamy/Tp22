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
    <?php include($page_format);?>
    <script src=".././assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>