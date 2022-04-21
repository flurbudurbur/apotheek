<?php

//start database connection
require_once $_SERVER["DOCUMENT_ROOT"] . '/apo-sebas/php/db_connection.php';
$sql = "SELECT * FROM `medicine` ORDER BY `medicine`.`medicine_name` ASC";
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