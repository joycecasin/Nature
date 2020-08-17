<?php include("includes/header.php"); ?>

<?php
// enkel ingelogde gebruiker mag deze pagina zien
if (!$session->is_signed_in()) {
    redirect('login.php');
}



   $user = new User();
    if (isset($_POST['submit'])) {
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
            <h2>User Toevoegen</h2>
            <form action="add_user.php" method="post">
                <div class="col-md-8">

                    <div class="form-group">
                        <label for="role">Role</label>
                        <input type="text" name="role" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="voornaam">Voornaam</label>
                        <input type="text" name="voornaam" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="naam">Naam</label>
                        <input type="text" name="naam" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" class="form-control">
                    </div>
                    <input type="submit" name="submit" value="User toevoegen" class="btn btn-primary">
                </div>

            </form>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>



