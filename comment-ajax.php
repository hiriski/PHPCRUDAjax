<?php

/** import db */
require_once('db.php');


/** Coba die hasil dari inputan user */
// die( $_POST["textarea"]); // BERHASIL!

/** user_id sudah di parse ke Integer */
$user_id = mysqli_real_escape_string($connect, $_POST["userid"]);
$content = mysqli_real_escape_string($connect, $_POST["comment_content"]);

$query   = "INSERT INTO comments (user_id, content) VALUES (
    $user_id,
    '$content'
)";

/* Eksekusi sekalian di uji */
if (mysqli_query($connect, $query)) {
    echo "Yey.. berhasil";
} else {
    echo "Gagal bro!";
}

?>