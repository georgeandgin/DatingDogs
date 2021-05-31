<?php include ('../components/config.php');?>
<?php include ('../components/connect.php');?>

<body>

<?php include ('header.php');?>

<form action="" method="POST">
    <label for="dogName">Dog's name:</label>
    <input type="text"id="dogName" name="dogName" value=""><br>
    <label for="breed">Breed:</label>
    <input type="text" id="breed" name="breed" value=""><br>
    <input type="submit" name="submit" value="Register" onclick="">
</form>

</body>