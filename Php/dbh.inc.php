<?php


$dsn = "mysql:host=localhost;dbname=myfirstdatabase";\
$dbusername="root";
$user_name="username";
$dbpassword="root";

try {
    $pdo= new PDO( $dsn , $dbusername , $dbpassword);
$pdo ->setattribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
echo " connection Failed" . $e->getMESSAGE();
}
?>