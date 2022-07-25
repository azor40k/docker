<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tp docker</title>
</head>
<body>
    <img src="https://group.bnpparibas/uploads/filters/f286b2a04cce5bfb4b0e2ed06cae02e29f7bb418.jpeg"></h1>
</body>
</html>

<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'MYSQL_USER';

//database user password
$pass = 'MYSQL_PASSWORD';

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully!";
}
?>