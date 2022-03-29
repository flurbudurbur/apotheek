<!DOCTYPE html>
<html>

<head>
    <?php $page = 'contact'; ?>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Schut Huisartsen Praktijk</title>
    <meta name="desctiption" content="placeholder text :D">
</head>

<body>
    <header>
        <?php include './php/include/header.php'; ?>
    </header>
    <article>
        <form action="./php/send.php" method="post">
            <label for="id-aanheffing">Aanheffing</label>
            <select name="aanhef" id="id-aanheffing">
                <option value="heer">Heer</option>
                <option value="mevrouw">Mevrouw</option>
                <option value="alt">Geen</option>
            </select><br />
            <label for="id-name">Voornaam</label>
            <input type="text" name="fname" id="id-fname" required><br />
            <label for="id-lname">Achternaam</label>
            <input type="text" name="lname" id="id-lname" required><br />
            <label for="id-email">Email</label>
            <input type="email" name="email" id="id-email" required><br />
            <label for="id-text"></label>
            <textarea name="text" id="id-text" cols="30" rows="10"></textarea>
            <input type="submit" value="Verstuur">
        </form>
        <a href="mailto:259901@cursist.rockopnh.nl">Stuur een mail</a>
    </article>
</body>

</html>