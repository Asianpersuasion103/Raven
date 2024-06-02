import sqlite3
<?php
$servername="localhost"
$user_name="user_name";
$password= "password";
$email="email";

$coon = new mysqli($user_name,$password,$email);
if($coon->connect_error){
    die("connection Failed", $coon->connect_error);
} 
 
//user input 
$user_name= $_POST("user_name");
$password=$_POST("password");
$email = $_POST("email");

$hashed_password = password_hash($password,PASSWORD_DEFAULT);


$stmt = $coon->prepare("INSERT INTO users (username,password,email)VALUES(?,?<?)");
$stmt = bind_param("sss",$user_name,$password,$email);

if($stmt->excecutes()){
    echo " infor recorded sucesfully";

}
else{
    echo " Error " .$stmt->error;
}

$stmt->close;
$coon->close;


?>
