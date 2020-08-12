<?php include("includes/header.php"); ?>

<?php
// enkel ingelogde gebruiker mag deze pagina zien
if (!$session->is_signed_in()) {
    redirect('login.php');
}

//$products = Product::find_all();
if (empty($_GET['id'])) {
    redirect('products.php');
} else {
    $product = Product::find_by_id($_GET['id']);
    if (isset($_POST['update'])) {
        if ($product) {
            $product->naam = $_POST['naam'];
            $product->omschrijving = $_POST['omschrijving'];
            $product->serienummer = $_POST['serienummer'];
            $product->prijs = $_POST['prijs'];
            $product->filename = $_POST['filename'];
            $product->update();
            redirect('products.php');
        }
    }
}
?>
<?php include("includes/sidebar.php"); ?>
<?php include("includes/navbar.php"); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>Producten wijzigen</h2>
            <form action="edit_product.php?id= <?php echo $product->id; ?>" method="post">
                <div class="col-md-8">
                    <div class="form-group">
                        <a href="#" class="thumbnail"><img src="<?php echo $product->picture_path(); ?>" height="350" width="350" alt=""></a>
                    </div>
                    <div class="form-group">
                        <label for="naam">Naam</label>
                        <input type="text" name="naam" class="form-control" value="<?php echo $product->naam; ?>">
                    </div>
                    <div class="form-group">
                        <label for="omschrijving">Omschrijving</label>
                        <input type="text" name="omschrijving" class="form-control" value="<?php echo $product->omschrijving; ?>">
                    </div>
                    <div class="form-group">
                        <label for="serienummer">Serienummer</label>
                        <input type="text" name="serienummer" class="form-control" value="<?php echo $product->serienummer; ?>">
                    </div>
                    <div class="form-group">
                        <label for="prijs">Prijs</label>
                        <input type="text" name="prijs" class="form-control" value="<?php echo $product->prijs; ?>">
                    </div>
                    <div class="form-group">
                        <label for="filename">Filename</label>
                        <input type="file" name="filename" class="form-control" value="<?php echo $product->filename; ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="photo-info-box">
                        <div class="inside">
                            <div class="box-inner">
                                <p class="text">
                                    <span class="fas fa-calendar">Uploaded on: April, 15, 2019 @ 7:54</span>
                                </p>
                                <p class="text">
                                    <span class="data photo_id_box">Uploaded on: April, 15, 2019 @ 7:54</span>
                                </p>
                                <p class="text">
                                    Photo id: <span class="data">34</span>
                                </p>
                                <p class="text">
                                    Filename: <span class="data">image.jpg</span>
                                </p>
                                <p class="text">
                                    <label for="type">File Type</label>
                                    <input readonly type="text" name="type" class="form-control" value="<?php echo $product->type; ?>">
                                </p>
                                <p class="text">
                                    <label for="size">File size</label>
                                    <input readonly type="text" name="size" class="form-control" value="<?php echo $product->size; ?>">
                                </p>
                            </div>
                            <div class="info-box-footer float-left">
                                <div class="info-box-update float-right">
                                    <input type="submit" name="update" value="update" class="btn btn-primary btn-lg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>



