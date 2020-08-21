<?php include("includes/header.php");
if (!$session->is_signed_in()) {
    redirect('login.php');
}
$products = Product::find_all();
?>
<?php include("includes/sidebar.php") ?>
<?php include("includes/navbar.php") ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>Producten</h2>
            <td><a href="add_product.php" class="btn btn-primary rounded-0"><i class="fab fa-product-hunt"></i> Product toevoegen</a></td>
            <hr>
            <table class="table table-header">
                <thead>
                    <tr>
                        <th>Product_img</th>
                        <th>Productnr</th>
                        <th>Naam</th>
                        <th>Omschrijving</th>
                        <th>Serienummer</th>
                        <th>Prijs</th>
                        <th>Wijzigen</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product): ?>
                    <tr>
                        <td><img src="<?php echo $product->picture_path(); ?>" width="75" alt="picture"></td>
                        <td class="d-flex align-self-stretch"><?php echo $product->id; ?></td>
                        <td><?php echo $product->naam; ?></td>
                        <td><?php echo $product->omschrijving; ?></td>
                        <td><?php echo $product->serienummer; ?></td>
                        <td><?php echo $product->prijs; ?></td>
                        <td><a href="edit_product.php?id=<?php echo $product->id; ?>" class="btn btn-danger rounded-0"><i class="fas fa-edit"></i></a></td>
                        <td><a href="delete_product.php?id=<?php echo $product->id;  ?>" class="btn btn-danger rounded-0"><i class="fas fa-trash-alt"></i></a></td>

                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>