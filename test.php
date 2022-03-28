<!DOCTYPE html>
<html>

<head>
    <?php
    include 'pages/head.php';
    $page = 'contact';
    ?>
    <!-- Main Quill library -->
    <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

    <!-- Theme included stylesheets -->
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">

    <!-- Core build with no theme, formatting, non-essential modules -->
    <link href="//cdn.quilljs.com/1.3.6/quill.core.css" rel="stylesheet">
    <script src="//cdn.quilljs.com/1.3.6/quill.core.js"></script>
    <title>Schut Huisartsen Praktijk</title>
    <meta name="desctiption" content="placeholder text :D">
</head>

<body>
    <header>
        <?php include './pages/header.php'; ?>
    </header>
    <article>
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
    </article>
</body>

</html>