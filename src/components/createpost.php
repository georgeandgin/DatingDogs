<?php include ('../components/config.php');?>
<?php include ('../components/connect.php');?>

<?php include ('header.php');?>

<body>

<h3 id="crtpost"> <i> Creating a post... </i> </h3>
<br> 

<form action="" method="POST" id="usrform">
    <label for="heading">Heading</label>
    <br>
    <input type="text" id="heading" name="heading" required>
<<<<<<< HEAD
    <br>
    <br>
    <textarea type="text" id="text" name="text" required> </textarea>
    <br>
=======
    <input type="text" id="text" name="text" required>
>>>>>>> d3931fef558b87eb7603e51009fa08c912f9a327
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
    }
?>
<?php include ('../components/footer.php');?>


</body>