<?php include ('../components/header.php');?>

<div class="insidePost">

    <?php
        $postID = $_GET['postID'];

        $query = "SELECT forumPost.postID, forumPost.userID, forumPost.heading, forumPost.text, user.username FROM forumPost INNER JOIN user ON (forumPost.userID = user.userID) WHERE forumPost.postID = ?";

        $stmt = $db->prepare($query);
        $stmt->bind_param('i', $postID);
        $stmt->bind_result($postID, $userID, $heading, $text, $username);
        $stmt->execute();

        while ($stmt->fetch()) {
            echo "<h2>$heading</h2>";
            echo "<h5> By $username</h5>";
            echo "<p> $text</p>";
        }
    
        $stmt->close();

    ?>

</div>

<?php
    if(!empty($_SESSION['username'])){
        echo "<form action='' method='POST' id='comment'>";
        echo "<input type='text' id='text' name='text' required>";
        echo "<input class='next' type='submit' name='submit' value='Submit' onclick=''>";
        echo "</form>";
    } 

    $query = "SELECT comment.commentID, comment.postID, comment.userID, comment.text, user.username FROM comment INNER JOIN user ON (comment.userID = user.userID) WHERE postID = ?";

    $stmt = $db->prepare($query);
    $stmt->bind_param('i', $postID);
    $stmt->bind_result($commentID, $postID, $userID, $text, $username);
    $stmt->execute();

    while ($stmt->fetch()) {
        echo "<p> $text</p>";
        echo "<h4> Comment by $username</h4>";
    }

    $stmt->close();

     if (isset($_POST['submit'])){
        $text = mysqli_real_escape_string($db, $_POST['text']);
        $userID = $_SESSION["userID"];

        $query = "INSERT INTO comment (postID, userID, text) VALUES (?,?,?)";

        $stmt = $db->prepare($query);
        $stmt->bind_param('iis', $postID, $userID, $text);
        $stmt->execute();
        $stmt->close();
        header('Location: '.$_SERVER['REQUEST_URI']);
    }
?>

</body>

<?php include ('../components/footer.php');?>
