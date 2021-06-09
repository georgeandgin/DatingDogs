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

<?php include ('header.php');?>

<h3 id="crtpost"> <i> Creating a post... </i> </h3>
<br> 

<form action="" method="POST" id="usrform">
    <label for="heading">Heading</label>
    <input type="text" id="heading" name="heading" required>
    <label for="tags">Select a tags</label>
    <input type="checkbox" id="food" name="food">
    <label for="food">food</label>
    <input type="checkbox" id="health" name="health">
    <label for="health">health</label>
    <input type="checkbox" id="games" name="games">
    <label for="games">games</label>
    <input type="checkbox" id="sports" name="sports">
    <label for="sports">sports</label>
    <input type="checkbox" id="beauty" name="beauty">
    <label for="beauty">beauty</label>
    <input type="checkbox" id="training" name="training">
    <label for="training">training</label>
    <input type="checkbox" id="mating" name="mating">
    <label for="mating">mating</label>
    <input type="checkbox" id="fashion" name="fashion">
    <label for="fashion">fashion</label>
    <input type="checkbox" id="other" name="other">
    <label for="other">other</label>
    <input type="text" id="text" name="text" required>
    <input class="next" type="submit" name="submit" value="Submit" onclick="">
</form>


<?php
     if (isset($_POST['submit'])){
        $heading = $_POST['heading'];
        $userID = $_SESSION["userID"];
        $text = $_POST['text'];

        $query = "INSERT INTO forumPost (userID, heading, text) VALUES (?,?,?)";

        $stmt = $db->prepare($query);
        $stmt->bind_param('iss', $userID, $heading, $text);
        $stmt->execute();
        $stmt->close();

        //$query = "SELECT postID from forum where heading = ?";
        //$stmt = $db->prepare($query);
        //$stmt->bind_param('s', $heading);
        //$stmt->execute();
        //$stmt->bind_result($postID);
        //$stmt->fetch();
        //$stmt->close();

        if (isset($_POST['food'])) {
            
        }

        if (isset($_POST['health'])) {
            
        }

        //header("Location: admin.php");
    }
?>
<?php include ('../components/footer.php');?>


</body>