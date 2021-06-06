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
    <label for="breed">Profile picture:</label>
    <input type="file" id="img" name="img"><br>
    <input type="submit" name="submit" value="Register dog profile" onclick="">
</form>

<?php
    if (isset($_POST['submit'])){
        $dogName = $_POST['dogName'];
        $breed = $_POST['breed'];
        $answer = $_POST['mating'];  
        if ($answer == "yes") {          
            $mating = 'Yes';  
        }
        else {
            $mating = 'No'; 
        }   
        $location = $_POST['location'];
        $description = $_POST['description'];
        $phoneNumber = $_POST['phone'];

        $currentUsername = $_SESSION['username'];

        $query = "SELECT userID FROM user WHERE username = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("s", $currentUsername);
        $stmt->execute();
        $stmt->bind_result($userID);
        $stmt->close();

        $owner = $userID;
        // profile img
        // link to owner

        $query = "INSERT INTO dog (dogName, breed, mating, location, description, phoneNumber, owner) VALUES (?,?,?,?,?,?,?)";

        $stmt = $db->prepare($query);
        $stmt->bind_param('sssssss', $dogName, $breed, $mating, $location, $description, $phoneNumber, $owner);
        $stmt->execute();
        $stmt->close();

        $query = "SELECT dog.owner, user.userID FROM user INNER JOIN dog ON user.userID = dog.owner";
        $stmt;
        $stmt = $db->prepare($query);
        $stmt->bind_result($owner, $userID);
        $stmt->execute();

        echo "hello";
        echo $owner;

        //header('Location: ../pages/index.php');
    }

?>

</body>