<?php

$host = 'localhost';
$dbname = 'examenbd';
$username = 'Pablo';
$password = 'padmin';

$dbh = new PDO('mysql:host=' . $host .';charset=utf8'.';dbname=' . $dbname, $username, $password);

?>