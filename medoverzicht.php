<!DOCTYPE html>
<html>
    <head>
        <?php
            $page = 'medoverzicht';
            include 'pages/head.php';
            // include './php/db_connection.php';
            
        ?>
        <title>Schut Huisartsen Praktijk</title>
        <meta name="desctiption" content="placeholder text :D">
    </head>
    <body>
        <header>
            <?php include './pages/header.php' ;?>
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