<?php
$host = "localhost";     
$username = "root";    
$password = "mysql123";   
$database = "vac";  

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // Fetch each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . 
             " | Name: " . $row["name"] . 
             "<br>";
    }

} else {
    echo "No records found";
}

$conn->close();
?>
