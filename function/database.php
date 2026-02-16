<?php
$host="localhost";
$user='root';
$pass='anushree';
$conn= mysqli_connect($host,$user,$pass);

if($conn){
    echo "connection successful";
}
else
{
   echo "Connection failed: " . mysqli_error($conn);
}

mysqli_close($conn);  
?>