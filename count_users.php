<?php
$host = 'redlock-db';
$user = 'root';
$pass = 'root';
$dbname = 'redlock';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT COUNT(*) as total_users FROM users";
$result = $conn->query($sql);

// Display the total number of users
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "total jumlah users: " . $row["total_users"];
    }
} else {
    echo "tidak ada hasil";
}

$conn->close();
?>
