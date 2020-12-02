<!-- Source: https://scrimba.com/learn/portfolio/the-portfolio-c9BgdJce -->
<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head2.inc.html.php'; ?>

<body>
    <?php include '../includes/header2.inc.html.php'; ?>

    <!-- Introduction -->
    <section class="intro" id="home">
        <h1 class="section__title section__title--intro">
            Hi, I am <strong>Robert Heintze</strong>
        </h1>
        <p class="section__subtitle section__subtitle--intro">front-end dev</p>
        <img src="../images/devRobertCam%20Large.jpg" alt="a picture of dev Robert" class="intro__img">
    </section>


    <!-- My services -->
    <section class="my-services" id="services">
        <h2 class="section__title section__title--services">What I do</h2>
        <div class="services">
            <div class="service">
                <h3>Design + Development</h3>
                <ul>
                    <li>
                        HTML
                    </li>
                    <li>
                        CSS
                    </li>
                    <li>
                        Javascript
                    </li>
                    <li>
                        JQuery
                    </li>
                    <li>
                        PHP
                    </li>
                    <li>
                        SEO
                    </li>
                    <li>
                        Responsive Design
                    </li>
                </ul>
            </div> <!-- / service -->

            <div class="service">
                <h3>E-Commerce</h3>
            </div> <!-- / service -->

            <div class="service">
                <h3>WordPress</h3>
            </div> <!-- / service -->
        </div> <!-- / services -->

        <a href="#work" class="btn">My Work</a>
    </section>


    <!-- About me -->
    <section class="about-me" id="about">
        <h2 class="section__title section__title--about">Who I am</h2>
        <p class="section__subtitle section__subtitle--about">Designer & developer in Portland,OR</p>
        <p>Robert is completing his AAS in Website Development and Design at Portland Community College</p>
        <img src="../images/devRobertBig.jpg" alt="Dev Robert" class="about-me__img">
    </section>

    <!-- My Work -->
    <section class="my-work" id="work">
        <h2 class="section__title section__title--work">My work</h2>
        <p class="section__subtitle section__subtitle--work">A selection of my range of work</p>

        <div class="portfolio">
            <!-- Portfolio item 01 -->
            <a target="_blank" href="../projects/aceinthehole.html.php" class="portfolio__item">
                <img src="../images/Ace%20in%20the%20Hole.JPG" alt="" class="portfolio__img">
            </a>

            <!-- Portfolio item 02 -->
            <a target="_blank" href="../projects/javajam.html.php" class="portfolio__item">
                <img src="../images/JavaJam.jpg" alt="" class="portfolio__img">
            </a>

            <!-- Portfolio item 03 -->
            <a target="_blank" href="../projects/pht.html.php" class="portfolio__item">
                <img src="../images/PHT.jpg" alt="" class="portfolio__img">
            </a>

            <!-- Portfolio item 04 -->
            <a target="_blank" href="../projects/Food%20Cart.html.php" class="portfolio__item">
                <img src="../images/Food%20Cart.JPG" alt="" class="portfolio__img">
            </a>

            <!-- Portfolio item 05 -->
            <a target="_blank" href="../projects/PacificTrails.html.php" class="portfolio__item">
                <img src="../images/Pacific%20Trails.JPG" alt="" class="portfolio__img">
            </a>

            <!-- Portfolio item 06 -->
            <a target="_blank" href="../projects/YogaStudios.html.php" class="portfolio__item">
                <img src="../images/Yogo.jpg" alt="" class="portfolio__img">
            </a>

            <!-- Portfolio item 07 -->
            <a target="_blank" href="../projects/pht2.html.php" class="portfolio__item">
                <img src="../images/pht2.jpg" alt="" class="portfolio__img">
            </a>

            <!-- Portfolio item 08 -->
            <a target="_blank" href="../projects/dogs.html.php" class="portfolio__item">
                <img src="../images/dogs.JPG" alt="" class="portfolio__img">
            </a>

            <!-- Portfolio item 09 -->
            <a target="_blank" href="../projects/yarn.html.php" class="portfolio__item">
                <img src="../images/Yarnstore.JPG" alt="" class="portfolio__img">
            </a>

            <!-- Portfolio item 10-->
            <a target="_blank" href="../projects/landscaping.html.php" class="portfolio__item">
                <img src="../images/Landscaping.JPG" alt="" class="portfolio__img">
            </a>

            <!-- Portfolio item 11-->
            <a target="_blank" href="../projects/travel.html.php" class="portfolio__item">
                <img src="../images/GreatTours.JPG" alt="" class="portfolio__img">
            </a>

            <!-- Portfolio item 12-->
            <a target="_blank" href="../projects/data.html.php" class="portfolio__item">
                <img src="../images/Data%20viz.JPG" alt="" class="portfolio__img">
            </a>

            <!-- Portfolio item 13-->
            <a target="_blank" href="../projects/photoshop.html.php" class="portfolio__item">
                <img src="../images/Photoshop.JPG" alt="" class="portfolio__img">
            </a>

            <!-- Portfolio item 14-->
            <a target="_blank" href="../projects/illustrator.html.php" class="portfolio__item">
                <img src="../images/Illustrator.JPG" alt="" class="portfolio__img">
            </a>
        </div>
    </section>


    <!-- Footer -->
    <?php include '../includes/footer.inc.html.php'; ?>

    <script src="../scripts/index.js"></script>
</body>
</html>