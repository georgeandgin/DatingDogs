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
    <input class="next" type="submit" name="submit" value="Submit" onclick="">
</form>
<textarea rows="4" cols="50" name="text" form="usrform">
Tell us about your dog issues...</textarea>


<?php
    // ADD STORE SESSION AND COOKIES
     if (isset($_POST['submit'])){
        session_start();
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $userType = 'user';
        
        $username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
        //$password = htmlspecialchars($password, ENT_QUOTES, 'UTF-8');

        $_SESSION['username'] = $username;

        $query = "INSERT INTO user (username, email, password, userType) VALUES (?,?,?, 'user')";

        $stmt = $db->prepare($query);
        $stmt->bind_param('sss', $username, $email, $password);
        $stmt->execute();
        $stmt->close();

        $_SESSION["loggedin"] = true;

        header('Location: register2.php');
    }
?>
<?php include ('../components/footer.php');?>


</body>