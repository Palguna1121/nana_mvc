<?php

require "connection.php";

$users = "CREATE TABLE users (
    id int not null primary key auto_increment,
    nama varchar(255) not null,
    password varchar(255) not null,
    email varchar(255) not null unique,
    no_telp varchar(50) not null unique,
    id_role int not null
)";

$role = "CREATE TABLE role (
    id int not null primary key auto_increment,
    role varchar(255) not null
)";

$tables = [$users, $role];

foreach ($tables as $insert_syntax) {
    if ($connection->query($insert_syntax) === TRUE) {
        echo "Table created successfully: " . explode(" ", $insert_syntax, 4)[2] . "<br>";
    } else {
        echo "Error creating table: " . $connection->error . "<br>";
    }
}

?>
