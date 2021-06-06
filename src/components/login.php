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
    $inputpassword = $_POST['password'];

    $username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
    //$inputpassword = htmlspecialchars($inputpassword, ENT_QUOTES, 'UTF-8');

    $query = "SELECT * from user WHERE username = '$username'";
    $result = mysqli_query($db, $query);

    if(mysqli_num_rows($result) > 0 )
        {   
            if (password_verify($inputpassword, $password)) {
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $username; 
                header('Location: profile.php');
            } else {
                print "The password is incorrect";
              }
        }
        else
        {
            echo 'The username is incorrect';
    }
}
?>


<?php include ('../components/footer.php');?>


</body>
</html>

