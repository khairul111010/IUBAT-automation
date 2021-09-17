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

$sql="INSERT INTO student(student_id,s_name,program,contact)VALUES('$_POST[student_id]','$_POST[s_name]','$_POST[program]','$_POST[contact]')";


if (mysqli_query($conn, $sql)) {
    header("refresh:1; url=insertstudent.php");
  
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>