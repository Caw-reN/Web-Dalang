<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'dalang_master';


// menggunakan try catch untuk menghubungkan ke database
try {
    $conn = mysqli_connect($hostname, $username, $password, $database_name);
} catch(mysqli_sql_exception) {
    echo "Cannot Connect To Database";
}





?>