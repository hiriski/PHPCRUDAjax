<?php

/** import db */
require_once('db.php');

$query = "INSERT INTO users (name) VALUES ('Tran Ngoc Le Na')";
if (mysqli_query($connect, $query)) {
    echo "Berhasil!";
} else {
    echo "gagal";
}

?>