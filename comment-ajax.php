<?php

/** import db */
require_once('db.php');


/** INSERT */

if ($_POST['type'] === 'insert') {
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
        echo "<li class='list-group-item mb-2'>
                <p>$content</p>
             </li>";
    } else {
        echo "Gagal bro!";
    }
}


/** DELETE */
if ($_POST['type'] === "delete") {

    /** ambil string yang dadinya btn_comment_id-16 menjadi 16 */
    $id_has_cut = substr($_POST['id'], 15);

    /** query delete */
    $query_delete = "DELETE FROM comments WHERE id = $id_has_cut";

    /** uji */
    if(mysqli_query($connect, $query_delete)) {
        echo "Delete comment success!";
    }
    else {
        echo "Delete comment failed!";
    }
}




?>