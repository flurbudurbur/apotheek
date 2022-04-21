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
            <table>
                <tr>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td><label for="id-aanheffing">Aanhef</label></td>
                    <td><select name="aanhef" id="id-aanheffing">
                        <option value="Dhr.">Dhr.</option>
                        <option value="Mv.">Mv.</option>
                        <option value="alt">Geen</option>
                    </select></td>
                </tr>
                <tr>
                    <td><label for="id-name">Voornaam</label></td>
                    <td><input type="text" name="fname" id="id-fname" required></td>
                </tr>
                <tr>
                    <td><label for="id-lname">Achternaam</label></td>
                    <td><input type="text" name="lname" id="id-lname" required></td>
                </tr>
                <tr>
                    <td><label for="id-email">Email</label></td>
                    <td><input type="email" name="email" id="id-email" required></td>
                </tr>
            </table>
            <textarea name="text" id="id-text" cols="130" rows="25"></textarea><br />
            <input type="submit" value="Verstuur">
        </form>
        <a href="mailto:259901@cursist.rockopnh.nl">Stuur een mail</a>
    </article>
    <footer>
        <?php include 'php/include/footer.php';?>
    </footer>
</body>

</html>