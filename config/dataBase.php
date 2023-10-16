<?php    

$host = "localhost";
$db = "login_db";
$user = "root";
$pass = "";

try {
    $mysqli = new mysqli("$host", "$user", "$pass", "$db");
    echo "conexión exitosa";
} catch (mysqli_sql_exception $e) {
    echo "Elerror fue: " . $e->getMessage();
}  

?>    