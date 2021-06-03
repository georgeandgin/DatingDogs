<?php include ('../components/config.php');?>
<?php include ('../components/connect.php');?>

<body>

<?php include ('header.php');?>

<form action="" method="POST">
    <label for="dogName">Dog's name:</label>
    <input type="text"id="dogName" name="dogName" required><br>
    <label for="breed">Breed:</label>
    <input type="text" id="breed" name="breed" required><br>
    <label for="mating">Mating:</label>
    <input type="radio" id="mating" name="mating" required>
    <label for="yes">YES</label><br>
    <input type="radio" id="mating" name="mating" required>
    <label for="no">NO</label><br>
    <label for="breed">Location:</label>
    <input type="text" id="location" name="location" required><br>
    <label for="breed">Description:</label>
    <input type="text" id="description" name="description" required><br>
    <label for="breed">Phone number:</label>
    <input type="text" id="phone" name="phone" required><br>
    <label for="breed">Profile picture:</label>
    <input type="file" id="img" name="img" required><br>
    <input type="submit" name="submit" value="Register dog profile" onclick="">
</form>

<input type="submit" name="later" value="Create dog profile later" onclick= "window.location = '../pages/index.php'">

</body>