<?php 
	$db = mysqli_connect('localhost', 'root', '', 'zelftoets_php');

	$name = "";
    $date = "";

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
        $date = $_POST['date'];
		

		mysqli_query($db, "INSERT INTO data (name, date)
		VALUES ('$name', '$date')"); 
		header('location: index.php');
    }
?>
