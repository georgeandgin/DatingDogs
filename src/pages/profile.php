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

<?php
        $dogID = $_GET['dogID'];

        $query = "SELECT dog.dogID, dog.dogname, dog.breed, dog.mating, dog.location, dog.description, dog.phoneNumber, dog.profilePicture, dog.owner,
        user.userID, user.username FROM dog INNER JOIN user ON (dog.owner= user.userID) WHERE dog.dogID = $dogID";

        $stmt = $db->prepare($query);
        $stmt->bind_result($dogID, $dogname, $breed, $mating, $location, $description, $phoneNumber, $profilePicture, $owner, $userID, $username);
        $stmt->execute();

        if ($mating == "Yes"){
            $relationship = "Currently looking for a partner";
        } else {
            $relationship = "Not looking for a partner";
        }

            while ($stmt->fetch()) {
                echo "<a href=\"profile.php?dogID=$dogID\"><img src='../profileImg/" . $profilePicture . "'/></a>";
                echo "<h2>$dogname</h2>";
                echo "<h3>$relationship</h3>";
                echo "<h2>Location: $location</h2>";
                echo "<p> $description</p>";
                echo "<h2> Call me $phoneNumber</h2>";
                echo "<h2> Owned by $username</h2>";
            }
    
        $stmt->close();

?>


<?php include ('../components/footer.php');?>


</body>
</html>