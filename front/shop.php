<?php include('includes/header.php'); ?>

<?php include('includes/navbar.php'); ?>

        <div class="site-section">
            <div class="container">

                <div class="row mb-5">
                    <div class="col-md-9 order-1">

                        <div class="row align">
                            <div class="col-md-12 mb-5">
                                <div class="float-md-left">
                                    <h2 class="text-black h5">Alle producten</h2>
                                </div>
                                <div class="d-flex">
                                    <div class="dropdown mr-1 ml-md-auto">
                                        <button type="button" class="btn btn-white btn-sm dropdown-toggle px-4" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Nieuw!
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                            <a class="dropdown-item" href="#">ZeroWaste</a>
                                            <a class="dropdown-item" href="#">Koken & Tafelen</a>
                                            <a class="dropdown-item" href="#">Verzorging</a>
                                            <a class="dropdown-item" href="#">Baby</a>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-white btn-sm dropdown-toggle px-4" id="dropdownMenuReference" data-toggle="dropdown">Filter</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                            <a class="dropdown-item" href="#">Name, A to Z</a>
                                            <a class="dropdown-item" href="#">Name, Z to A</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Price, low to high</a>
                                            <a class="dropdown-item" href="#">Price, high to low</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-md-3 order-2 mb-5 mb-md-0">
                        <div class="border p-4 rounded mb-4">
                            <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1"><a href="#" class="d-flex"><span>ZeroWaste</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                                <li class="mb-1"><a href="#" class="d-flex"><span>Koken & Tafelen</span> <span class="text-black ml-auto">(2,550)</span></a></li>
                                <li class="mb-1"><a href="#" class="d-flex"><span>Verzorging</span> <span class="text-black ml-auto">(2,124)</span></a></li>
                                <li class="mb-1"><a href="#" class="d-flex"><span>Baby</span> <span class="text-black ml-auto">(2,124)</span></a></li>
                            </ul>
                        </div>

                        <div class="border p-4 rounded mb-4">
                            <div class="mb-4">
                                <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Price</h3>
                                <div id="slider-range" class="border-primary"></div>
                                <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
                            </div>                                             
                        </div>
                    </div>
                </div>

            </div>
        </div>
<div class="row">
    <div class="col-12">

    </div>
</div>
        <!-- Begin Section Producten ontdekken-->
       <!--  <div class="site-section">
            <div class="container">
                <div class="title-section mb-5">
                    <h2 class="text-uppercase"><span class="d-block">Ontdek</span> de producten</h2>
                </div>
                <div class="row align-items-stretch">
                    <div class="col-lg-6">
                        <div class="product-item sm-height bg-gray mb-4">
                            <a href="zerowaste.php" class="product-category">Zero Waste <span>4 items</span></a>
                            <img src="images/ZeroWaste.jpg" alt="Image" class="img-fluid">
                        </div>
                        <div class="product-item sm-height bg-gray">
                            <a href="verzorging.php" class="product-category">Verzorging <span>4 items</span></a>
                            <img src="images/verzorging.jpg" alt="Image" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-item sm-height bg-gray mb-4">
                            <a href="koken.php" class="product-category">Koken & Tafelen <span>4 items</span></a>
                            <img src="images/koken&tafelen.jpg" alt="Image" class="img-fluid">
                        </div>

                        <div class="product-item sm-height bg-gray">
                            <a href="baby.php" class="product-category">Baby <span>4 items</span></a>
                            <img src="images/baby.jpg" alt="Image" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Einde Section Producten ontdekken -->

       <?php include('includes/footer.php'); ?>