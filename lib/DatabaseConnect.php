<?php
require ('../config/config.php');

$dbconnect = mysqli_connect(DB_HOSTNAME, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);

if(!$dbconnect){
    die('error connecting to database');
}
echo 'connection successful';
?>