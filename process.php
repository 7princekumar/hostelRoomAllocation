<?php include 'database.php';>
 
<?php
 
// create a variable
$name=$_POST['name'];
$phone_no=$_POST['phone-no'];
$semester=$_POST['semester'];
$password=$_POST['password'];
$username=$_POST['username']
 
//Execute the query
 
mysqli_query($connect,"INSERT INTO Students(name,phone_no,sem,password,reg_ID)
				VALUES('$name','$phone_no','$semester','$password','$username')");


			
	if(mysqli_affected_rows($connect) > 0){
	echo "<p>Employee Added</p>";
	echo "<a href="index.html">Go Back</a>";
} else {
	echo "Employee NOT Added<br />";
	echo mysqli_error ($connect);

?>