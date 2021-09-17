<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="http://localhost/mywebsite/images/logo.png" rel="icon">
	<title>IUBAT Automation</title>
<style type="text/css">
		ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  margin-bottom: 50px;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
	*{
		margin: 0;
		font-family: 'Open Sans', sans-serif;
		font-family: 'Calligraffitti', cursive;
	}
	header{
		text-align: center;
			display: block;
			padding: 20px;
			color: green;	
		} 
	footer{

		text-align: center;
			display: block;
			padding: 20px;
			background-color: #001a00;
			color: #ffffff;
			margin-top: 100px;
	}
	.head{
		text-align: center;
		padding: 10px;
	}
	.form{
		text-align: center;
		margin: 20px;
		margin-bottom: 130px;
	}
	table, th, td {
     border: 1px solid black;
	 border-collapse:collapse;
     text-align: center;
     margin: auto;
     height: 50px;
     width: 950px;
}
tr:nth-child(odd) {
  background-color: #c9ccd1;
}
</style></head>



<body>
	<!---header start--->
		<header>
			<p></p><h1>IUBAT-International Univesity of Business Agriculture And Technology</h1><p></p>
		</header>
		 <ul>
    <li><a class="active" href="http://localhost/mywebsite/">Home</a></li>
    <li><a href="http://localhost/mywebsite/insertstudent.php">Insert</a></li>
    <li><a href="http://localhost/mywebsite/DELE.php">View</a></li>
	<li><a href="http://localhost/mywebsite/search.php">Search Student</a></li>
	<li><a href="http://localhost/mywebsite/reportview.php">Check report</a></li>
  </ul>
	<!---header end--->
	
		<form method="POST" class="form" action="http://localhost/mywebsite/search.php">
			<br><br>
			<h3 class="head">Student Search by ID</h3>
  <br>Student ID:<br><br>
  <input type="text" name="search_id">
  <br><br>
  <input type="submit" value="Search">    

	</form>	

<!---php start--->
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "course_offering";
$id="";
if(isset($_POST["search_id"])){
$id=$_POST["search_id"];
}
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT student_id, s_name, program, contact  FROM student where student_id='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row


  echo "<table><tr><th><center>Student id</th><th>Student Name</th><th>Department</th><th>Contact</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
        echo "<td>". $row["student_id"]. "</td><td>" . $row["s_name"]."</td><td>" . $row["program"]."</td><td>". $row["contact"]."</td>";
  echo "</tr>";
    }
echo "</table>";
} else {
    echo "<h2><font color='black'></font></h2>";
}

mysqli_close($conn);
?> 
<!---php end--->


	<!---footer start--->
		<footer>
			<h5>This system is made</h5>
			<h6>by</h6>
			<p></p><h3>Khairul Hasan-18103199</h3>
			<h3>Nawsheen Ahmed Chowdhury-18103377</h3>
			<h3>Nusrat Jahan Ety-18103151</h3><p></p>

		</footer>
	<!---footer end--->

</body></html>