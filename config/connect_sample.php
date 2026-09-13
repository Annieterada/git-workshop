<?php

echo "This is connecting database file";

$host = "localhost";
$user = "user";
$password = "password";
$dbname = "your_database_name";

mysqli_connect($host, $user, $password, $dbname);

    echo "connect successfully";