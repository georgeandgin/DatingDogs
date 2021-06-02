<?php include ('../components/config.php');?>
<?php include ('../components/connect.php');?>

<body>

<?php include ('header.php');?>

<form action="register2.php" method="POST">
    <label for="username">Username:</label>
    <input type="text"id="username" name="username" value=""><br>
    <label for="email">Email:</label>
    <input type="text" id="pemail" name="email" value=""><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" value=""><br>
    <input type="submit" name="submit" value="Next" onclick="">
</form>

<?php
    // save input values
    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['email']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
    }

    // make sure all the fields are filled in
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password)) { array_push($errors, "Password is required"); }

    
?>

</body>