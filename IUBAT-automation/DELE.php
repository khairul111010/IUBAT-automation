<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="http://localhost/mywebsite/images/logo.png" rel="icon">
    <title>IUBAT Automation</title>
<style>
  #my_centered_buttons { 
    display: flex; 
    justify-content: center; 
    margin-top: 50px;

  }
        ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  margin-bottom: 50px;
}
a{
  text-decoration: none;
  color: green;
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
        header{
        text-align: center;
            display: block;
            padding: 20px;
            color: green;   
        }
    *{font-family: 'Open Sans', sans-serif;
        font-family: 'Calligraffitti', cursive;}
table, th, td {
     border: 1px solid black;
   border-collapse:collapse;
     text-align: center;
     margin: auto;
     height: 50px;
     width: 950px;
}
tr:nth-child(even) {
  background-color: #f2f2f2;
}
footer{

        text-align: center;
            display: block;
            padding: 20px;
            background-color: #001a00;
            color: #ffffff;
    }
    .A{
        text-decoration: none;
        text-align: center;
        position: absolute;
        right:  45%;
        color: green;
        background-color: #ffffff;
    }
    .B{
    padding: 10px;
 border:5px solid green;  

    }
      body{
      margin: 0px;
    }
</style></head>



<body>
    <!---header start--->
        <header>
            <p></p><h1>IUBAT-International Univesity of Business Agriculture And Technology</h1><p></p>
        </header>
    <!---header end--->
     <ul>
    <li><a class="active" href="http://localhost/mywebsite/">Home</a></li>
    <li><a href="http://localhost/mywebsite/insertstudent.php">Insert</a></li>
    <li><a href="http://localhost/mywebsite/DELE.php">View</a></li>
    <li><a href="http://localhost/mywebsite/search.php">Search Student</a></li>
    <li><a href="http://localhost/mywebsite/reportview.php">Check report</a></li>
  </ul>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "course_offering";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "select * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table align='center'><tr><th>Student ID</th><th>Name</th><th>Department</th><th>Contact</th><th>Delete</th><th>Update Information</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["student_id"]. "</td><td>" . $row["s_name"]. "</td><td>" . $row["program"]. "</td><td>" . $row["contact"]. "</td><td><a href =delete.php?student_id=".$row["student_id"].">Delete</a></td><td><a href=update.php?student_id=".$row["student_id"].">Update</a></td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>
<div id="my_centered_buttons">
    <a href="studentreport.php" class="B">!!  PRINT REPORT  !!</a>
</div>


<br><br>
    <!---footer start--->
        <footer>
            <h5>This system is made</h5>
            <h6>by</h6>
            <p></p><h3>Khairul Hasan-18103199</h3>
            <h3>Nawsheen Ahmed Chowdhury-18103377</h3>
            <h3>Nusrat Jahan Ety-18103151</h3><p></p>

        </footer>
    <!---footer end--->
</body>
</html>