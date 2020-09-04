<?php

//connectie met de database maken
function connect()
{
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zelftoets_php";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    return $conn;
}

catch(PDOException $e)
    {
    echo "connection failed: " . $e->getMessage();
    }
}

//functie om 1 verjaardag op te halen uit de database
function getOne(){
    $conn = connect();
    $query = $conn->prepare("SELECT * FROM data where id=:id");
    $query->execute(['id' => $_GET['id']]);
    $result = $query->fetch();
    return $result;
}

//functie om alle verjaardagen op te halen uit de database
function getAll(){
    $conn = connect();
    $stmt = $conn->prepare('SELECT * FROM data ORDER BY DATE');
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}

//functie om 1 verjaardag te verwijderen uit de database
function deleteLocation($id){
    $conn = connect();
    $stmt = $conn->prepare("DELETE FROM data WHERE id= :deleteid");
    $stmt->execute([":deleteid" =>$id]);
}

?>