<?php

require ("assets/includes/functions.php");

$id = $_GET['id'];

deleteLocation($id);

header('location: index.php');
?>
