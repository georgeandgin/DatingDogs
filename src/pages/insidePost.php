<?php include ('../components/config.php');?>
<?php include ('../components/connect.php');?>

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

<div class="insidePost">

    <?php
        $postID = $_GET['postID'];

        $query = "SELECT forumPost.postID, forumPost.userID, forumPost.heading, forumPost.text, user.username FROM forumPost INNER JOIN user ON (forumPost.userID = user.userID) WHERE forumPost.postID = $postID";

            $stmt = $db->prepare($query);
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

<?php include ('../components/footer.php');?>


</body>