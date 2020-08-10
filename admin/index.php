
<?php include("includes/header.php");?>
<?php
if (!$session->is_signed_in()){
    redirect("login.php");

}
/*if($_SESSION['role'] == 'klant'){
    redirect('login.php');
}*/


?>


<?php include("includes/sidebar.php"); ?>

<?php include("includes/navbar.php"); ?>

<?php include("includes/content.php"); ?>

<?php include("includes/footer.php"); ?>
