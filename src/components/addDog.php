<?php include ('../components/config.php');?>
<?php include ('../components/connect.php');?>

<?php include ('header.php');?>

<body>

<form action="" method="POST" enctype="multipart/form-data">
    <label for="dogName">Dog's name:</label>
    <input type="text"id="dogName" name="dogName" required><br>
    <label for="breed">Breed:</label>
    <input type="text" id="breed" name="breed" required><br>
    <label for="mating">Mating:</label>
    <input type="radio" id="mating" name="mating" value="no" required>
    <label for="yes">YES</label><br>
    <input type="radio" id="mating" name="mating" value="yes" required>
    <label for="no">NO</label><br>
    <label for="breed">Location:</label>
    <input type="text" id="location" name="location" required><br>
    <label for="breed">Description:</label>
    <input type="text" id="description" name="description" required><br>
    <label for="breed">Phone number:</label>
    <input type="text" id="phone" name="phone" required><br>
    <label for="image">Profile picture:</label>
    <input type="file" id="image" name="image" accept="image/*" required><br>
    <input type="submit" name="submit" value="Register dog profile" onclick="">
</form>

<?php
    if (isset($_POST['submit'])){
        $dogName = strip_tags($_POST['dogName']);
        $breed = strip_tags($_POST['breed']);
        $answer = strip_tags($_POST['mating']);  
        if ($answer == strip_tags("yes")) {          
            $mating = 'Yes';  
        }
        else {
            $mating = 'No'; 
        }   
        $location = strip_tags($_POST['location']);
        $description = strip_tags($_POST['description']);
        $phoneNumber = strip_tags($_POST['phone']);

        $user = $_SESSION['username'];

        $query = "SELECT userID from user where username = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param('s', $user);
        $stmt->execute();
        $stmt->bind_result($userID);
        $stmt->fetch();
        $stmt->close();

        $_SESSION["userID"] = $userID;
        $owner = $userID;

        $profilePicture = $_FILES['image']['name'];
	
	    move_uploaded_file($_FILES["image"]["tmp_name"],'../profileImg/'.$profilePicture);

        $query = "INSERT INTO dog (dogName, breed, mating, location, description, phoneNumber, profilePicture, owner) VALUES (?,?,?,?,?,?,?,?)";

        $stmt = $db->prepare($query);
        $stmt->bind_param('sssssssi', $dogName, $breed, $mating, $location, $description, $phoneNumber, $profilePicture, $owner);
        $stmt->execute();
        $stmt->close();

        header('Location: ../pages/index.php');
    } 
?>

</body>