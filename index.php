<?php
require ("assets/includes/functions.php");
require ("assets/includes/navbar.php");
$result = getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verjaardagen</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="">
  <table class="table">
    <thead>
      <tr>
        <th>Naam</th>
        <th>Verjaardag</th>
      </tr>
    </thead>
    <?php
     foreach ($result as $row) {
        ?>
       <tr>
       <a href="detail.php">
       <td><h2><?=$row["name"]?></h2></td>
       <td><h2><?=$row["date"]?></h2></td>
       </a>
       <td>
            <a href="updateform.php?id=<?php echo $row['id']; ?>"
            class="btn btn-info">edit</a>
            <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Weet je zeker dat je deze verjaardag wilt verwijderen?')"confirm
            class="btn btn-danger">Delete</a>
       </td>
       </tr>
         </div>
      <?php
          }
      ?>
    </table>
</div>
</body>
</html>