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
        <form action="" method="post">
            <label for="id-aanheffing">Aanheffing</label>
            <select name="aanheffing" id="id-aanheffing">
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
            <label for=""></label>
            <!-- Include stylesheet -->
            <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
            <!-- Create the editor container -->
            <div id="editor">
                <p>Hello World!</p>
                <p>Some initial <strong>bold</strong> text</p>
                <p><br></p>
            </div>
            <!-- Include the Quill library -->
            <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
            <!-- Initialize Quill editor -->
            <script>
                var quill = new Quill('#editor', {
                    theme: 'snow'
                });
            </script>
        </form>
        <a href="mailto:259901@cursist.rockopnh.nl">Stuur een mail</a>
    </article>
</body>

</html>