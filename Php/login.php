<?php /
$username="usename";
$password="password";
$email="email";
$servername="servername";

$coon =  new mysqli("sss",$username,$email,$password);
if( $coon -> connect_error){
 die ( " connnedtion failed", $coon -> connect_error);

}
$user_name=$_POST["user_name"];
$password=$_POST["password"];
$email=$_POST["email"];

$stmt= $coon->(" SELECT * from ushers where ushername = ?");
$stmt=bind_param("s", user);
$stmt=excecute();
$results= $stmt->get_results();

if(results->row_colm>0){
    echo " this users is alrady takern"
    else {
        sql=" INSERT into user (username,password) VALUES ('username','password')";
        if(coon ->query($sql)==true){
            echo "Users has been saved ";
else {
    echo " Error" , $sql. <br> $coon->error ;
    header("Location: register.php");
    exit();

 }
        }
    }
}
$stmt->close();
$coon->close();


?>
