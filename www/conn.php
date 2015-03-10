<?php

$dbh = new PDO("mysql:host=localhost;dbname=bfc_db", "root", "");
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$userId = $_POST['userId'];
$password = $_POST['password'];

$statement = $dbh->prepare("insert into users(username, password, firstName, lastName) VALUES (?,?,?,?)");
$statement->execute(array($userId, $password, $firstName, $lastName));
echo "welcome";
?>