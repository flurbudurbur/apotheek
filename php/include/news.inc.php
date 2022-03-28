<?php

//start database connection
require_once $_SERVER["DOCUMENT_ROOT"] . '/apotheek/php/db_connection.php';
$sql = "SELECT * FROM `news` ORDER BY `news`.`news_id` DESC";
$results = mysqli_query($conn, $sql);
while ($data = mysqli_fetch_array($results)) {
    if ($data["news_image"] != NULL) {
        echo '<div class="news-article">
                <img src="' . $data["news_image"] . '" alt="" class="news-image">
                <h3 class="news-title">' . $data["news_name"] . '</h3>
                <p class="news-desc">' . $data["news_description"] . '</p>
            </div>';
    } else {
        echo '<div class="news-article">
                <h3 class="news-title">' . $data["news_name"] . '</h3>
                <p class="news-desc">' . $data["news_description"] . '</p>
            </div>';
    }
}