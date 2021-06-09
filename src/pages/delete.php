<?php include ('../components/config.php');?>
<?php include ('../components/connect.php');?>

<?php
    $dogID = $_GET['dogID'];

    $query = "DELETE FROM dog WHERE dogID=$dogID";
    $db->exec($query);
   
    header("Location: userprofile.php");
?>