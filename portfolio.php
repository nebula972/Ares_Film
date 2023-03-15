<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/4f0c055056.js" crossorigin="anonymous"></script>
    <link rel="icon" type="assets/image/png" sizes="16x16" href="assets/images/Réalisé par ares film BLANC">
    <title>Portfolio - ARES FILM</title>
</head>
<body>
    <!-- Nav -->
    <?php include 'header.php'; ?><br><br><br>

    <!-- Main-->
    <div class="grille">
    <?php
       $imgs = glob("assets/portfolio/*.{jpg,png,JPG}", GLOB_BRACE);
       foreach ($imgs as $img) 
       {
           echo "<div class='grille-item'><img src='$img' alt=''></div>";
       }
    ?>
    </div>

    <div class="btn">
        <a href="#"><i class="fa-solid fa-arrow-up"></i></a>
    </div>

    <!-- Footer -->
    <?php include 'footer.html'; ?>

    <!-- Script -->
    <script src="js/menu.js"></script>
    
    
</body>
</html>