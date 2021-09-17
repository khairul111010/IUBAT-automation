<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "course_offering";

$conn = new mysqli($hostname,$username,$password,$dbname);
if($conn->connect_error) {
		    die("Connection Fail".$conn->connect_error);
		}
		$id = $_GET["student_id"];
$sql = "DELETE FROM student WHERE student_id = '$id'";
if ($conn->query($sql) == TRUE) {
    header('Location: DELE.php');
} else {
         echo "<center><h2>Problem To DELETE</h2></center>";
}

?>