<?php
$mysqli = new mysqli("localhost", "root", "", "bakery_db");

if ($mysqli->connect_error) {
    echo "kết nỗi lỗi" . $mysqli->connect_error;
    exit();
}
