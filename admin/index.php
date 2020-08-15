
<?php include("includes/header.php");?>
<?php
/*if (!$session->is_signed_in()){
    redirect("login.php");

}*/

/* Als klant inlogt of de role is leeg dan wordt je redirect naar de login pagina */
if($_SESSION['role'] == 'klant' || empty($_SESSION['role'])){
    redirect('login.php');
}


?>


<?php include("includes/sidebar.php"); ?>

<?php include("includes/navbar.php"); ?>

<?php include("includes/content.php"); ?>

<?php include("includes/footer.php"); ?>
