<!DOCTYPE html>
<html>
    <head>
        <?php include 'pages/head.php' ;?>
        <title>Schut Huisartsen Praktijk</title>
        <meta name="desctiption" content="placeholder text :D">
    </head>
    <body>
        <header>
            <?php include './pages/header.php' ;?>
        </header>
        <article>
            <div class="gallery">
                <div class="slideshow">
                    <!-- IMAGE AND SLIDESHOW SHIT HERE! -->
                </div>
                <iframe class="gmaps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d782.3454723922455!2d4.794543678080574!3d52.78480398905438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47cf4e258ca8ccdb%3A0x3272ca6e663a9bac!2sROC%20Kop%20van%20Noord-Holland!5e0!3m2!1sen!2sde!4v1644918898475!5m2!1sen!2sde" allowfullscreen="true" loading="lazy"></iframe>
            </div>
            <div class="service">
                <a class="btn" href="#">Herhaalservice</a>
                <a class="btn" href="#">Medicijnoverzicht</a>
                <a class="btn" href="#">Inschrijven</a>
            </div>
            <div class="info">
                <div class="open">
                    <h2><?php include 'php/date.php'; ?></h2>
                    <p>
                        Maandag: 10:00 - 18:00<br/>
                        Dinsdag: 10:00 - 18:00<br/>
                        Woensdag: 10:00 - 18:00<br/>
                        Donderdag: 10:00 - 18:00<br/>
                        Vrijdag: 10:00 - 18:00<br/>
                        Zaterdag: 12:00 - 17:00<br/>
                        Zondag: Gesloten
                    </p>
                </div>
                <div class="adress">
                    <!-- adress details here -->
                </div>
            </div>
        </article>
    </body>
</html>