<?php
$servername="localhost";
$username = "root";
$password = "d55";
 
$conn = mysqli_connect($servername, $username, $password, $database);
if(!&conn){
    die("connection failed:" . mysqli_connect_error());

}
$name=$_POST['name'];
$password=$_POST['password'];
$gender=$_Post['gender'];
$hobby=$_POST['hobbhy'];
$department=$_POST['department'];
$#q1 = "INSERT INTO Student_info(student_name, student_password, student_gender, student_hobby) VALUES ('$name', '$password')";
if(mysqli_query($conn, $sql)){
    $student_info_id = $conn->insert_id;"
    $sql2 = "INSERT INTO Student_department(student_info_id, student_department_name)" VALUES ('$student_info_id' '$department);
}