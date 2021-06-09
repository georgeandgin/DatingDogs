<?php include ('../components/config.php');?>
<?php include ('../components/connect.php');?>

<?php 
    session_destroy();
    header('Location: ../pages/index.php');
?>