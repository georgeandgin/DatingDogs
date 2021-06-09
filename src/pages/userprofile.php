<?php include ('../components/header.php');?>

<body>

<h2>Your dogs:</h2>

<?php
    $owner = $_SESSION['userID'];

    $query = "SELECT dogID, dogName, profilePicture FROM dog WHERE owner = ?";

    $stmt = $db->prepare($query);
    $stmt->bind_param('i', $owner);
    $stmt->bind_result($dogID, $dogName, $profilePicture);
    $stmt->execute();

    while ($stmt->fetch()) {
        echo "<div class='item'>";
        echo "<a href=\"profile.php?dogID=$dogID\"><img src='../profileImg/" . $profilePicture . "'/></a>";
        echo "<h4><a href=\"profile.php?dogID=$dogID\">$dogName</a></h4>";
        echo "</div>"; 
        echo "<h5><a href=\"delete.php?dogID=$dogID\">Remove dog</a></h5>";
    }
    $stmt->close();
?>

<input type="submit" name="add" value="Add dog" onclick="window.location='../components/register2.php';">

</body>
<?php include ('../components/footer.php');?>