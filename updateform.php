<?php
require ("assets/includes/functions.php");
require ("assets/includes/navbar.php");
$id = $_GET["id"];
$row = getOne();
?>

<body class="text-center">
    <div class="container">
      <form action="update.php" method="post">
        <p class="my-4">
            <label for="name">Naam:</label>
            <input type="text" name="name" id="name" value="<?php echo 
            $row["name"] ?>" required>
        </p>
        <p class="my-4">
            <label for="date">Date:</label>
            <input type="date" name="date" id="date" value="<?php echo 
            $row["date"] ?>" required>
        </p>
        <input type="number" name="id" value="<?php echo $id ?>" hidden>
        <button type="submit" class="btn btn-primary">submit</button>
    </form>
</body>
</html>