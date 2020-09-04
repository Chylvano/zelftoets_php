<?php
require ("assets/includes/functions.php");
require ("assets/includes/navbar.php");
$result = getAll();
?>

<body>
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
      <?php
          }
      ?>
    </table>
</div>
</body>
</html>