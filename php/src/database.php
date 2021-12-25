<?php

$mysqli = new mysqli("db", "root", "example");

if( $mysqli -> connect_errno ) {
    $mysql_version = "Failed to connect to MySQL: " . $mysqli->connect_error;
}

$mysql_version = $mysqli->server_version;

$mysqli->close();

?>