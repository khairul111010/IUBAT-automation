<?php
$con = mysqli_connect("localhost","root","","course_offering");
mysqli_select_db($con,'course_offering');

$sql = "UPDATE student SET student_id='$_POST[student_id]',s_name='$_POST[s_name]',program='$_POST[program]',contact='$_POST[contact]' WHERE id='$_POST[id]'";

if(mysqli_query($con,$sql))
header("refresh:.1; url=DELE.php");
else
echo "Not Updated";

?>