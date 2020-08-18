<?php include("includes/header.php");?>

<?php
// enkel ingelogde gebruiker mag deze pagina zien
if (!$session->is_signed_in()){
    redirect('login.php');
}

$clients = Client::find_all();
?>
<?php include("includes/sidebar.php"); ?>

<?php include("includes/navbar.php"); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>Alle Klanten</h2>
            <td><a href="add_user.php" class="btn btn-primary rounded-0"><i class="fas fa-user-plus"></i> Klant toevoegen</a></td>
            <table class="table table-header">
                <thead>
                <tr>
                    <th>Klantnr</th>
                    <th>Naam</th>
                    <th>Voornaam</th>
                    <th>Bedrijf</th>
                    <th>Email</th>
                    <th>Telefoon</th>
                    <th>Straat</th>
                    <th>Nummer</th>
                    <th>Toevoeging</th>
                    <th>Postcode</th>
                    <th>Gemeente</th>
                    <th>Wijzigen</th>
                    <th>Delete</th>

                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($users as $user):
                    ?>
                    <tr>
                        <td><?php echo $user->id ; ?></td>
                        <td><?php echo $user->username ; ?></td>
                        <td><?php echo $user->password ; ?></td>
                        <td><?php echo $user->voornaam ; ?></td>
                        <td><?php echo $user->naam ; ?></td>
                        <td><?php echo $user->role ; ?></td>
                        <td><a href="edit_user.php?id=<?php echo $user->id; ?>" class="btn btn-danger rounded-0"><i class="fas fa-edit"></i></a></td>
                        <td><a href="delete_user.php?id=<?php echo $user->id;  ?>" class="btn btn-danger rounded-0"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>
