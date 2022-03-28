<?php

//start database connection
require_once $_SERVER["DOCUMENT_ROOT"] . '/apotheek/php/db_connection.php';

if (isset($_GET['sortingOrder'])) {
    if ($_GET['sortingOrder'] != 'DESC') {
        $sql = "SELECT * FROM medicine ORDER BY medicine_name ASC";
    } else {
        $sql = "SELECT * FROM medicine ORDER BY medicine_name DESC";
    }
} else {
    $sql = "SELECT * FROM medicine ORDER BY medicine_name ASC";
}

$results = mysqli_query($conn, $sql);
while ($data = mysqli_fetch_array($results)) {
    echo '
        <tr>
            <td>' . $data["medicine_name"] . '</td>
            <td>' . $data["medicine_stock"] . '</td>
            <td>yeet</td>
        </tr>
        ';
}