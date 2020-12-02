<?php define('BASE_URL','home/home2.html.php'); ?>
<header>
    <div class="logo">
        <img src="images/devRobertlogo.jpg" alt="devRobertLogo">
    </div>
    <button class="nav-toggle" aria-label="toggle navigation">
        <span class="hamburger"></span>
    </button>
    <nav class="nav">
        <ul class="nav__list">
            <li class="nav__item"><a href="<?php echo BASE_URL; ?>#home" class="nav__link">Home</a></li>
            <li class="nav__item"><a href="<?php echo BASE_URL; ?>#services" class="nav__link">My Services</a></li>
            <li class="nav__item"><a href="<?php echo BASE_URL; ?>#about" class="nav__link">About me</a></li>
            <li class="nav__item"><a href="<?php echo BASE_URL; ?>#work" class="nav__link">My Work</a></li>
        </ul>
    </nav>
</header>