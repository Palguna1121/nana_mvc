<?php

require "connection.php";

$role_seeder = "INSERT INTO role (role) VALUES
    ('admin'),
    ('user')";

if ($connection->query($role_seeder) === TRUE) {
    echo "Data inserted successfully into table: role<br>";
} else {
    echo "Error inserting data into table: " . $connection->error . "<br>";
}

$users_seeder = "INSERT INTO users (nama, password, email, no_telp, id_role) VALUES
    ('Admin', 'admin', 'admin@gmail.com', '087889287608', 1),
    ('Mas User', 'password', 'user1@gmail.com', '08987654321', 2),
    ('Mba User', 'password', 'user2@gmail.com', '08987643221', 2),
    ('palguna', 'password', 'pakegbakun@gmail.com', '085829376675', 2)";

if ($connection->query($users_seeder) === TRUE) {
    echo "Data inserted successfully into table: users<br>";
} else {
    echo "Error inserting data into table: " . $connection->error . "<br>";
}

echo "All data seeded successfully!";
?>
