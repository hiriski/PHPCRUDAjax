<?php

/* db credentials */
$host     = 'localhost';
$user     = "root";
$password = "";
$db_name  = "crudajax";

/** Connection */
$connect   = mysqli_connect($host, $user, $password, $db_name);
if ($connect) {
    // echo "Connect Success!";
} else {
    echo mysqli_connect_error();
}
?>