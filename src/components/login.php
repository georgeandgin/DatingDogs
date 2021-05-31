<body>

<?php include ('header.php');?>

<form action="" method="POST">
    <label for="username">Username:</label>
    <input type="text"id="username" name="username" value=""><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" value=""><br>
    <label for="breed">Breed:</label>
    <input type="text" id="breed" name="breed" value=""><br>
    <label for="dogName">Dog's name:</label>
    <input type="text" id="dogName" name="dogName" value=""><br>
    <label for="phone">Phone number:</label>
    <input type=number id="phone" name="phone" value=""><br>
    <label for="location">Location:</label>
    <input type="text" id="location" name="location" value=""><br>
    <label for="partner">Looking for a partner?</label>
    <input type="radio" name="looking" value="yes" checked>YES</input>
    <input type="radio" name="looking" value="no">NO</input></br>
    <label for="picture">Profile picture:</label>
    <input type="file" id="picture" name="picture" value="upload"><br>
    <label for="description">Description:</label><br>
    <input type="text" id="description" name="description" value="Describe your inner dog beauty..."><br>
    <input type="submit" name="submit" value="Save profile" onclick="">
</form>
 
</body>