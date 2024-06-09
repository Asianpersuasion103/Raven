import sqlite3
<?php

 echo " its connected "

$db_file = "path/to/d";
$servername="localhost"
$user_name="user_name";
$password= "password";
$email="email";
$Uregistartion= "Uregistartion ";

$coon = new mysqli($user_name,$password,$email);
if($coon->connect_error){
    die("connection Failed", $coon->connect_error);
} 
 

if($_SERVER[$REQUEST_METHOD]="POST"){
    $user_name=$_POST['$user_name'];
    $password=$_POST['password'];
    $email=$_POST['email'];
}

$hashed_password = password_hash($password,PASSWORD_DEFAULT);


$stmt = $coon->prepare("INSERT INTO users (username,password,email)VALUES(?,?,?)");
$stmt = bind_param("sss",$user_name,$password,$email);

if($stmt->excecutes()){
    echo " infor recorded sucesfully";

}
else{
    echo " Error " .$coon->error;
}

$stmt->close();
$coon->close();


if(Uregistartionssucessfull){
    $response= array(status=>"sucessfull","message"=> "user has been registered");
else if {
   $response=array(status=>,"error", "mesage"=>"user did not register");
}
}

header('content-type: applcation/json'){
   echo json_encode($response);
}

?>
