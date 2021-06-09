<?php include ('../components/config.php');?>
<?php include ('../components/connect.php');?>

<?php 
    session_unset();
    session_destroy();
    header('Location: ../pages/index.php');
?>