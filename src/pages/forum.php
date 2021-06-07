<?php ?>
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

<div class="forum">

<div class="tags">
<div>
<h3>Select a tag:</h3>
</div>
<div class="break"></div>
<div>
<?php
    $query = "SELECT * FROM tag";

    $stmt = $db->prepare($query);
    $stmt->bind_result($tagID, $tagName);
    $stmt->execute();

    while ($stmt->fetch()){
        echo "<h5> #$tagName </h5>";
        echo "<br>";
    }

    $stmt->close();
?>
</div>

</div>
<h3 class="newpost"><a href="../createpost.php">Create a post</a></h3>

<div class="forumpost">
<h3>How to tell your dog is vegan?</h3>
<img src="../assets/bone.png">
<div class="break"></div>
<h6> By Gintare</h6>
<h5>#food</h5>
<h5>#health</h5>
</div>

<?php
        $query = "SELECT userID, heading from forumPost";

        $stmt = $db->prepare($query);
        $stmt->bind_result($userID, $heading);
        $stmt->execute();

        while ($stmt->fetch()) {
            echo "<div class='forumpost'>";
            echo "<h3>$heading</h3>";
            echo "<img src='../assets/bone.png'>";
            echo "<div class='break'></div>";
            
            echo "<h6> By $userID</h6>";
            echo "</div>"; 
        }
  
        $stmt->close();
?>

</div>

<?php include ('../components/footer.php');?>


</body>
</html>