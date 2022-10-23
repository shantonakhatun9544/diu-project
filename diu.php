<?php

$servername="localhost";
$username="root";
$password="";
$database="d55";
//create connection_aborted
$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn) 
{
	die("Connection faied: " . mysqli_connect_error());

}

$name=$_POST['name'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$hobby=$_POST['hobby'];
$department=$_POST['department'];

$sql = "INSERT INTO Student_info(student_name, student_password, student_gender, student_hobby) VALUES ('$name', '$password', '$gender', '$hobby')";
if (mysqli_query($conn, $sql)) 
{
	$student_info_id = $conn->insert_id;
	$sql2 = "INSERT INTO Student_department(student_info_id, student_department_name) VALUES ('$student_info_id', '$department')";

	if(mysqli_query($conn, $sql2))
	{
		echo "INSERTED SUCCESSFULLY!";
	}else{
		echo "ERROR: " . $sql2 . "<br>" . mysqli_error($conn);
	}
}else{
	echo "ERROR: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>