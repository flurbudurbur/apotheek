<!DOCTYPE html>
<html>

<head>
    <?php $page = 'home'; ?>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Schut Huisartsen Praktijk</title>
    <meta name="desctiption" content="placeholder text :D">
    <link rel="stylesheet" href="./css/slideshow.css">
    <script src="./js/slideshow.js" defer></script>
</head>

<body>
    <header>
        <?php include './php/include/header.php'; ?>
    </header>
    <article>
        <div class="gallery">
            <?php include './php/include/slideshow.php'; ?>
            <iframe class="gmaps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d782.3454723922455!2d4.794543678080574!3d52.78480398905438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47cf4e258ca8ccdb%3A0x3272ca6e663a9bac!2sROC%20Kop%20van%20Noord-Holland!5e0!3m2!1sen!2sde!4v1644918898475!5m2!1sen!2sde" allowfullscreen="true" loading="lazy"></iframe>
        </div>
        <div class="service">
            <a class="btn" href="#">
                <h3>Herhaalservice</h3>
                <p>stuff</p>
            </a>
            <a class="btn" href="medoverzicht.php">
                <h3>Medicijnoverzicht</h3>
                <p>stuff</p>
            </a>
            <a class="btn" href="#">
                <h3>Inschrijven</h3>
                <p>stuff</p>
            </a>
        </div>
        <div class="news">
            <?php include './php/include/news.inc.php'; ?>
        </div>
    </article>
    <footer>
        <?php include 'php/include/footer.php';?>
    </footer>
</body>
</html>