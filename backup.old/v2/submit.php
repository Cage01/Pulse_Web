<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require ('../lib/DatabaseConnect.php');

$name = $_POST['name'];
$email = $_POST['email'];
$location = $_POST['location'];
$beta = $_POST['beta'];

//$sql = "INSERT INTO PulseDB.test (name, email, location) VALUES('$name', '$email', '$location')";
$stmt = $dbconnect->prepare("INSERT INTO PulseDB.SignupPage_tbl (name, email, location, beta) VALUES(?,?,?,?)");
$stmt->bind_param('sssd', $name, $email, $location, $beta);

$stmt->execute();

/* close statement and connection */
$stmt->close();