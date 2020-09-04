<?php

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

function getOne(){
    $conn = connect();
    $query = $conn->prepare("SELECT * FROM games where id=:id");
    $query->execute(['id' => $_GET['id']]);
    $result = $query->fetch();
    return $result;
}

function getAll(){
    $conn = connect();
    $stmt = $conn->prepare('SELECT * FROM data ORDER BY DATE');
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}

function deleteLocation($id){
    $conn = connect();
    $stmt = $conn->prepare("DELETE FROM data WHERE id= :deleteid");
    $stmt->execute([":deleteid" =>$id]);
}



?>

