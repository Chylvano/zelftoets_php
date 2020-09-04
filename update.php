<?php
$driver = "mysql:dbname=zelftoets_php;host=127.0.0.1";
$user = "root";
$password = "";

$id = $_POST["id"];
$name = $_POST["name"];
$date = $_POST["date"];

$pdo = new PDO($driver, $user, $password);
$stmt = $pdo->prepare("UPDATE data SET name = :name, date = :date WHERE id = :id"
    );
$stmt->bindParam(":id", $id);
$stmt->bindParam(":name", $name);
$stmt->bindParam(":date", $date);
$stmt->execute();
header('location: index.php');
?>