<?php include("includes/header.php"); ?>

<?php
// enkel ingelogde gebruiker mag deze pagina zien
if (!$session->is_signed_in()) {
    redirect('login.php');
}
if (empty($_GET['id'])){
    redirect('users.php');
}
   $user = User::find_by_id($_GET['id']);
    if (isset($_POST['update'])) {
        if ($user) {
            $user->role = $_POST['role'];
            $user->voornaam = $_POST['voornaam'];
            $user->naam = $_POST['naam'];
            $user->username = $_POST['username'];
            $user->password = $_POST['password'];

            $user->save();
            redirect('users.php');
        }
    }

?>
<?php include("includes/sidebar.php"); ?>
<?php include("includes/navbar.php"); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>User Wijzigen</h2>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="col-md-8">

                    <div class="form-group">
                        <label for="role">Role</label>
                        <input type="text" name="role" class="form-control" value="<?php echo $user->role;?>">
                    </div>
                    <div class="form-group">
                        <label for="voornaam">Voornaam</label>
                        <input type="text" name="voornaam" class="form-control" value="<?php echo $user->voornaam;?>">
                    </div>
                    <div class="form-group">
                        <label for="naam">Naam</label>
                        <input type="text" name="naam" class="form-control" value="<?php echo $user->naam;?>">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" value="<?php echo $user->username;?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" class="form-control" value="<?php echo $user->password;?>">
                    </div>
                    <input type="submit" name="update" value="User Wijzigen" class="btn btn-primary">
                    <a href="delete_user.php?id=<?php echo $user->id; ?>" class="btn btn-danger">User verwijderen</a>
                </div>

            </form>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>



