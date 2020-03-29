<?php

$host = 'localhost';
$dbname = 'reservas_bd';
$username = 'Pablo';
$password = 'padmin';

$dbh = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $username, $password);

?>