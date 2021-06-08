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

<form action="" method="POST">
  <label for="username">Username</label><br>
  <input type="text" id="username" name="username" value="" required><br>
  <label for="title">Password</label><br>
  <input type="password" id="password" name="password" value="" required><br><br>
  <input type="submit" name="submit" value="Login">
</form> 

<?php
if(isset($_POST['username']) && isset($_POST['password'])) {
      
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
    $password = htmlspecialchars($password, ENT_QUOTES, 'UTF-8');

    $query = "SELECT * FROM user WHERE username = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $stmt->bind_result($username, $email, $password, $userType, $userID);
    $row = $stmt->fetch();

    if (!empty($row)) { // checks if the user actually exists(true/false returned)
        if (password_verify($_POST['password'], $password)) {
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;
            $_SESSION["userType"] = $userType;
            $_SESSION["userID"] = $userID;
            header('Location: ../pages/index.php');
        } else {
        echo 'Incorrect password';
        }
    } else {
        echo "Such user does not exist"; //email entered does not match any in DB
    }
    
    $stmt->close();
}

?>


<?php include ('../components/footer.php');?>


</body>
</html>

