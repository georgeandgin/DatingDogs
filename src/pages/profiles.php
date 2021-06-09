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

<div class="container">
    <h2> Filter by breed: <h2>
    <form action="" method="POST" id="breedForm">
        <select name="breeds" id="breed">
        <option name="breed" value="Australian Shepherd">Australian Shepherd</option>
        <option name="breed" value="Poodle">Poodle</option>
        <option name="breed" value="Pug">Pug</option>
        <option name="breed" value="Komondor">Komondor</option>
        <option name="breed" value="Labrador">Labrador</option>
        <option name="breed" value="Golden doodle">Golden doodle</option>
        <input  class="next" type="submit" name="submit" value="submit">
    </form>
    </select>

    <?php
        if(isset($_POST['submit'])) {
            if($_POST['breeds']=='Australian Shepherd') {  
                $query = "SELECT dogID, dogName, breed, profilePicture from dog WHERE breed = 'Australian Shepherd'";

                $stmt = $db->prepare($query);
                $stmt->bind_result($dogID, $dogName, $breed, $profilePicture);
                $stmt->execute();
        
                while ($stmt->fetch()) {
                    echo "<div class='item'>";
                    echo "<a href=\"profile.php?dogID=$dogID\"><img src='../profileImg/" . $profilePicture . "'/></a>";
                    echo "<h4><a href=\"profile.php?dogID=$dogID\">$dogName</a></h4>";
                    echo "</div>"; 
                }
          
                $stmt->close();
            }
            elseif($_POST['breeds']=='Poodle') { 
                $query = "SELECT dogID, dogName, breed, profilePicture from dog WHERE breed = 'Poodle'";

                $stmt = $db->prepare($query);
                $stmt->bind_result($dogID, $dogName, $breed, $profilePicture);
                $stmt->execute();
        
                while ($stmt->fetch()) {
                    echo "<div class='item'>";
                    echo "<a href=\"profile.php?dogID=$dogID\"><img src='../profileImg/" . $profilePicture . "'/></a>";
                    echo "<h4><a href=\"profile.php?dogID=$dogID\">$dogName</a></h4>";
                    echo "</div>"; 
                }
          
                $stmt->close();
            } elseif($_POST['breeds']=='Pug') { 
                $query = "SELECT dogID, dogName, breed, profilePicture from dog WHERE breed = 'Pug'";

                $stmt = $db->prepare($query);
                $stmt->bind_result($dogID, $dogName, $breed, $profilePicture);
                $stmt->execute();
        
                while ($stmt->fetch()) {
                    echo "<div class='item'>";
                    echo "<a href=\"profile.php?dogID=$dogID\"><img src='../profileImg/" . $profilePicture . "'/></a>";
                    echo "<h4><a href=\"profile.php?dogID=$dogID\">$dogName</a></h4>";
                    echo "</div>"; 
                }
          
                $stmt->close();
            } elseif($_POST['breeds']=='Komondor') { 
                $query = "SELECT dogID, dogName, breed, profilePicture from dog WHERE breed = 'Komondor'";

                $stmt = $db->prepare($query);
                $stmt->bind_result($dogID, $dogName, $breed, $profilePicture);
                $stmt->execute();
        
                while ($stmt->fetch()) {
                    echo "<div class='item'>";
                    echo "<a href=\"profile.php?dogID=$dogID\"><img src='../profileImg/" . $profilePicture . "'/></a>";
                    echo "<h4><a href=\"profile.php?dogID=$dogID\">$dogName</a></h4>";
                    echo "</div>"; 
                }
          
                $stmt->close();
            } elseif($_POST['breeds']=='Labrador') { 
                $query = "SELECT dogID, dogName, breed, profilePicture from dog WHERE breed = 'Labrador'";

                $stmt = $db->prepare($query);
                $stmt->bind_result($dogID, $dogName, $breed, $profilePicture);
                $stmt->execute();
        
                while ($stmt->fetch()) {
                    echo "<div class='item'>";
                    echo "<a href=\"profile.php?dogID=$dogID\"><img src='../profileImg/" . $profilePicture . "'/></a>";
                    echo "<h4><a href=\"profile.php?dogID=$dogID\">$dogName</a></h4>";
                    echo "</div>"; 
                }
          
                $stmt->close();
            }

          }

    ?>

<div class="profiles">
    <h2>All dogs</h2>
    <?php
        $query = "SELECT dogID, dogName, profilePicture from dog";

        $stmt = $db->prepare($query);
        $stmt->bind_result($dogID, $dogName, $profilePicture);
        $stmt->execute();

        while ($stmt->fetch()) {
            echo "<div class='item'>";
            echo "<a href=\"profile.php?dogID=$dogID\"><img src='../profileImg/" . $profilePicture . "'/></a>";
            echo "<h4><a href=\"profile.php?dogID=$dogID\">$dogName</a></h4>";
            echo "</div>"; 
        }
  
        $stmt->close();
    ?>

</div>
</div>


<?php include ('../components/footer.php');?>


</body>
</html>