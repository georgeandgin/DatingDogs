<?php include ('../components/config.php');?>
<?php include ('../components/connect.php');?>

<?php
    $dogID = $_GET['dogID'];

    $query = "DELETE FROM dog WHERE dogID=$dogID";
    $stmt = $db->prepare($query);
    $stmt->bind_param('i' ,$dogID);
    $stmt->execute();

    header("Location: userprofile.php");
?>