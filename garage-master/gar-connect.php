<?php
// gar-connect.php
// maakt een connectie met de database 'garage'
// Mark

$servername = "localhost";
$dbname = "garagetest";
$username = "root";
$password = "";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",
                        $username,  $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         echo "Connectie Gelukt  <br  />";
}
catch(PDOException $e)
{
    echo "Connectie mislukt:  " . $e->getMessage();
}
?>