<?php include ('../components/header.php');?>

<body>

<div class="forum">

<?php
    /*$query = "SELECT * FROM tag";

    $stmt = $db->prepare($query);
    $stmt->bind_result($tagID, $tagName);
    $stmt->execute();

    while ($stmt->fetch()){
        echo "<h5> #$tagName </h5>";
        echo "<br>";
    }

    $stmt->close();*/
?>
</div>

</div>

<?php
    if(!empty($_SESSION['username'])){
        echo "<h3 class='newpost'><a href='../components/createpost.php'>Create a post +</a></h3>";
    }

    $query = "SELECT forumPost.postID, forumPost.userID, forumPost.heading, user.username FROM forumPost INNER JOIN user ON (forumPost.userID = user.userID)";

    $stmt = $db->prepare($query);
    $stmt->bind_result($postID, $userID, $heading, $username);
    $stmt->execute();

    while ($stmt->fetch()) {
        echo "<div class='forumpost'>";
        echo "<a href=\"insidePost.php?postID=$postID\">$heading</a>";
        echo "<img src='../assets/bone.png'>";
        echo "<div class='break'></div>";
        echo "<h6> By $username</h6>";
        echo "</div>"; 
    }
  
    $stmt->close();
?>

</div>

</body>
