<?php include ('../components/config.php');?>
<?php include ('../components/connect.php');?>

<?php
    $dogID = $_GET['dogID'];

    mysqli_query($db,"DELETE FROM dog WHERE dogID=$dogID");
    mysqli_close($db);
    header("Location: userprofile.php");
?>