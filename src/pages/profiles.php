<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    
    <title>Dating Dogs</title>
    <?php include ('../components/config.php');?>
    <?php include ('../components/connect.php');?>
</head>
<body>
<?php include ('../components/header.php');?>

<div class="container">
    <h2> Search by breed: ____________<h2>
<div class="profiles">
    <?php
        $query = "SELECT dogID, dogName, profilePicture from dog";

        $stmt = $db->prepare($query);
        $stmt->bind_result($dogID, $dogName, $profilePicture);
        $stmt->execute();

        while ($stmt->fetch()) {
            echo "<div class='item'>";
            echo "<a href=\"profile.php?dogID=$dogID\"><img src='../profileImg/" . $profilePicture . "'/></a>";
            echo "<h4><a href=\"profile.php?dogID=$dogID\">$dogName</a></h4>";
            echo "</div>"; 
        }
  
        $stmt->close();
    ?>

</div>
</div>


<?php include ('../components/footer.php');?>


</body>
</html>