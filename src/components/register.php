<?php include ('../components/config.php');?>
<?php include ('../components/connect.php');?>

<body>

<?php include ('header.php');?>

<form action="" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>
    <input type="submit" name="submit" value="Next" onclick="">
</form>

<?php
    // ADD STORE SESSION AND COOKIES
     if (isset($_POST['submit'])){
        session_start();
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $userType = 'user';
        
        $user = $_SESSION['username'];

        $query = "INSERT INTO user (username, email, password, userType) VALUES (?,?,?, 'user')";

        $stmt = $db->prepare($query);
        $stmt->bind_param('sss', $username, $email, $password);
        $stmt->execute();
        $stmt->close();

        header('Location: register2.php');
    }
?>

</body>