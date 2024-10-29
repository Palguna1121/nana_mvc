<?php

require "connection.php";



$relasi_users = "ALTER TABLE users
    ADD FOREIGN KEY (id_role) REFERENCES role(id);
";



$relations = [$relasi_users];

foreach ($relations as $relasi) {
    if ($connection->query($relasi) === TRUE) {
        echo "Relationship added successfully: " . explode(" ", $relasi, 4)[2] . "<br>";
    } else {
        echo "Error adding relationship: " . $connection->error . "<br>";
    }
}

echo "relationships created successfully!";