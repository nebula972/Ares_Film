<?php $page = basename($_SERVER['PHP_SELF']); ?>
<nav class="navbar">
    <label class="logo"><a href="index.php" class="navbar-link" ><img class="logo" src="assets/images/Réalisé par ares film BLANC.png" alt="logo ares flim blanc"></a></label>
    <div class="toggle">
        <i class="ouvrir fas fa-bars"></i>
        <i class="fas fa-times fermer"></i>
    </div>
    <ul class="navbar-menu">
        <li class="navbar-item">
            <a href="index.php" class="<?php if($page == 'index.php'){ echo ' active"';}?>" >Acceuil</a>
        </li>
        <li class="navbar-item">
            <a href="portfolio.php" class="<?php if($page == 'portfolio.php'){ echo ' active"';}?>" >Portfolio</a>
        </li>
        <li class="navbar-item">
            <a href="prestation.php" class="<?php if($page == 'prestation.php'){ echo ' active"';}?>" >Prestation</a>
        </li>
        <li class="navbar-item">
            <a href="contact.php" class="<?php if($page == 'contact.php'){ echo ' active"';}?>" >Contact</a>
        </li>
    </ul>
</nav>