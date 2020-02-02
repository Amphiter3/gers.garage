<?Php

//Database details
$dbhost_name = "localhost"; 
$database = "gers_garage";       
$username = "root";            
$password = "root";           

//Create connection
$con = mysqli_connect($dbhost_name, $username, $password, $database);

try {
$dbo = new PDO('mysql:host='.$dbhost_name.';dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}
?> 
