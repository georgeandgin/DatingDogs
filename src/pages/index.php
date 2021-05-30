<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dating Dogs</title>
</head>

<body>
    <?php include ('header.php');?>
<?php
    $query = "SELECT * FROM user"
    $stmt = $db->prepare($query);
    $stmt->bind_result($username);
    $stmt->execute();

    while ($stmt->fetch()) {
        echo $username;
      }

      $stmt->close();

    ?>
?>    
</body>

<?php include ('footer.php');?>

</html>