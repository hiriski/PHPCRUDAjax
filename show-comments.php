<?php

require_once('db.php');
$table_name = 'comments';
$query_select = "SELECT * FROM $table_name";

$comments = mysqli_query($connect, $query_select);

/** Uji */
if (mysqli_num_rows($comments) > 0) { ?>
    
<?
    /** Fetch ke object ah */
    /* loop */
    while($comment = mysqli_fetch_object($comments)) { ?>
        <ul class="list-group">
            <li class="list-group-item mb-2"><?=$comment->content?></li>
        </ul>
    <?php } ?>

<?php 
} else {
    echo "table is empty";
}
?>