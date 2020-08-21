<?php include("includes/header.php"); ?>

<?php
// enkel ingelogde gebruiker mag deze pagina zien
if (!$session->is_signed_in()) {
    redirect('login.php');
}

   $product = new Product();
    if (isset($_POST['submit'])) {
        if ($product) {
            $product->naam = $_POST['naam'];
            $product->omschrijving = $_POST['omschrijving'];
            $product->serienummer = $_POST['serienummer'];
            $product->prijs = $_POST['prijs'];
            $product->set_product_file($_FILES['product_image']);



            $product->save_product();
            redirect('products.php');
        }
    }

?>
<?php include("includes/sidebar.php"); ?>
<?php include("includes/navbar.php"); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>Product Toevoegen</h2>
            <form action="add_product.php" method="post" enctype="multipart/form-data">
                <div class="col-md-8">

                    <div class="form-group">
                        <label for="naam">Naam product</label>
                        <input type="text" name="naam" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="omschrijving">Omschrijving</label>
                        <input type="text" name="omschrijving" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="serienummer">Serienummer</label>
                        <input type="text" name="serienummer" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="prijs">Prijs</label>
                        <input type="text" name="prijs" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="file">Product foto</label>
                        <input type="file" name="file" class="form-control">
                    </div>
                    <input type="submit" name="submit" value="Product toevoegen" class="btn btn-primary">
                </div>

            </form>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>



