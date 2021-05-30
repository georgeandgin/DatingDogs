<body>
    <?php include ('header.php');?>
<?php
    $query = "SELECT * FROM user"
    $stmt = $db->prepare($query);
    $stmt->bind_result($username);
    $stmt->execute();

    while ($stmt->fetch()) {
        echo "<p>$username</p>";
      }

      $stmt->close();

    ?>
?>    
</body>