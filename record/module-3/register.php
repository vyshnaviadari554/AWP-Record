<?php
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$course = $_POST['course'];


$conn = mysqli_connect("localhost", "root","", "student");
//$connection = mysqli_connect("localhost","root","","dsection")
// Insert data into table
$sql = "INSERT INTO student(name, email, password, gender, course) VALUES ('$name', '$email', '$password', '$gender', '$course')";
if (mysqli_query($conn, $sql)) {
echo "Registration successful!";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>
