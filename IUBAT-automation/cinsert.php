<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "course_offering";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: ");
}

$sql="INSERT INTO course(c_name,code,section,credit)VALUES('$_POST[c_name]','$_POST[code]','$_POST[section]','$_POST[credit]')";


if (mysqli_query($conn, $sql)) {
    header("refresh:.1; url=insertcourse.php");
  
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>