<!DOCTYPE html>
<html>
    <head>
        <?php
            $page = 'home';
            include 'pages/head.php';
        ?>
        <title>Schut Huisartsen Praktijk</title>
        <meta name="desctiption" content="placeholder text :D">
        <link rel="stylesheet" href="./css/slideshow.css">
        <script src="./js/slideshow.js" defer></script>
    </head>
    <body>
        <header>
            <?php include './pages/header.php' ;?>
        </header>
        <article>
            <div class="gallery">
                <?php include './pages/slideshow.php'; ?>
                <iframe class="gmaps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d782.3454723922455!2d4.794543678080574!3d52.78480398905438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47cf4e258ca8ccdb%3A0x3272ca6e663a9bac!2sROC%20Kop%20van%20Noord-Holland!5e0!3m2!1sen!2sde!4v1644918898475!5m2!1sen!2sde" allowfullscreen="true" loading="lazy"></iframe>
            </div>
            <div class="service">
                <a class="btn" href="#">Herhaalservice</a>
                <a class="btn" href="medoverzicht.php">Medicijnoverzicht</a>
                <a class="btn" href="#">Inschrijven</a>
            </div>
            <div class="info">
                <h1><?php include 'php/date.php'; ?></h1>
                <p>
                    <?php if($day == 1) {echo '<u>';} else {echo '';} ?>Maandag: 10:00 - 18:00<?php if ($day == 1) {echo '</u>';} else {echo '';} ?><br/>
                    <?php if($day == 2) {echo '<u>';} else {echo '';} ?>Dinsdag: 10:00 - 18:00<?php if ($day == 2) {echo '</u>';} else {echo '';} ?><br/>
                    <?php if($day == 3) {echo '<u>';} else {echo '';} ?>Woensdag: 10:00 - 18:00<?php if ($day == 3) {echo '</u>';} else {echo '';} ?><br/>
                    <?php if($day == 4) {echo '<u>';} else {echo '';} ?>Donderdag: 10:00 - 18:00<?php if ($day == 4) {echo '</u>';} else {echo '';} ?><br/>
                    <?php if($day == 5) {echo '<u>';} else {echo '';} ?>Vrijdag: 10:00 - 18:00<?php if ($day == 5) {echo '</u>';} else {echo '';} ?><br/>
                    <?php if($day == 6) {echo '<u>';} else {echo '';} ?>Zaterdag: 12:00 - 17:00<?php if ($day == 6) {echo '</u>';} else {echo '';} ?><br/>
                    <?php if($day == 7) {echo '<u>';} else {echo '';} ?>Zondag: Gesloten<?php if ($day == 7) {echo '</u>';} else {echo '';} ?>
                </p>
                <p>Hofstraat 13<br/>1741 CD, Schagen</p>
            </div>
        </article>
    </body>
</html>