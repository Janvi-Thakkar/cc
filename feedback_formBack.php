<?php

$experience=$_POST['experience'];
$name=$_POST['name'];
$email=$_POST['email'];
$sem=$_POST['sem'];
$contact=$_POST['contact'];
$message=$_POST['message'];

$conn=new mysqli('localhost','root','','feedback');
if($conn->connect_error){
    die('Connection Failed:'.$conn->connect_error);

}
else{

 	$stmt=$conn->prepare("insert into form(experience,name,email,sem,contact,message) values(?,?,?,?,?,?)");
    $stmt->bind_param("ssssis",$experience,$name,$email,$sem,$contact,$message);
    $stmt->execute();
    echo "Hola !!! Your Details Have Been Successfully Saved At Backend.....";
    $stmt->close();
    $conn->close();
}



?>