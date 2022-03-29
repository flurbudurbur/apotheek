<!DOCTYPE html>
<html>
    <head>
        <?php $page = 'medoverzicht'; ?>
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
            <table>
                <tr>
                    <th>Naam</th>
                    <th>Voorraad</th>
                    <th>Omschrijving</th>
                </tr>
                <?php include './php/include/medicine.inc.php'; ?>
            </table>
        </article>
    </body>
</html>