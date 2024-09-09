<?php
$hostname="localhost";
$username="james";
$password="1234";
$database="recipe_db";
$db_connect= mysqli_connect($hostname, $username, $password, $database);

if($db_connect) {
 echo "Succesfully connected";
}
else {
    echo "failed";
}
?>
