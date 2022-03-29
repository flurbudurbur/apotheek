<?php include './db_connection.php' ?>
<?php
$aanhef = $_REQUEST['aanhef'];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$text = $_POST["text"];
$sql = "INSERT INTO `contact` (`contact_id`, `contact_aanhef`, `contact_fname`, `contact_lname`, `contact_email`, `contact_text`) VALUES (NULL, '$aanhef', '$fname', '$lname', '$email', '$text')";
$result = mysqli_query($conn, $sql);