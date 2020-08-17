    <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <aside class="left-sidebar bg-sidebar">
      <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
          <a href="http://localhost/webshop/admin/index.php">
            <i class="fas fa-signature"></i>
            <span class="brand-name">Nature Dashboard</span>
          </a>
         
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">

          <!-- sidebar menu -->
          <ul class="nav sidebar-inner" id="sidebar-menu">

            <li class="has-sub active expand">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                <i class="fas fa-user"></i>
                <span class="nav-text">Gebruiker</span> <b class="caret"></b>
              </a>

              <ul class="collapse show" id="dashboard" data-parent="#sidebar-menu">
                <div class="sub-menu">
                  <li class="active">
                    <a class="sidenav-item-link" href="http://localhost/webshop/admin/users.php">
                      <span class="nav-text">Alle gebruikers</span>
                    </a>
                  </li>

                  <li>
                    <a class="sidenav-item-link" href="../admin/add_user.php">
                      <span class="nav-text">Gebruiker toevoegen</span>
                    </a>
                  </li>

                </div>
              </ul>
            </li>

            <li class="has-sub">
            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
                      aria-expanded="false" aria-controls="ui-elements">
              <i class="fab fa-product-hunt"></i>
                <span class="nav-text">Producten</span> <b class="caret"></b>
              </a>
              <ul class="collapse" id="ui-elements" data-parent="#sidebar-menu">
                <div class="sub-menu">

                  <li>
                    <a class="sidenav-item-link" href="http://localhost/webshop/admin/products.php">
                      <span class="nav-text">Alle producten</span>

                    </a>
                  </li>
                  <li>
                    <a class="sidenav-item-link" href="../admin/add_product.php">
                      <span class="nav-text">Product toevoegen</span>

                    </a>
                  </li>
                  <li>
                    <a class="sidenav-item-link" href="../admin/products.php">
                      <span class="nav-text">Product verwijderen</span>

                    </a>
                  </li>

                </div>
              </ul>
            </li>


            <li class="has-sub">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts" aria-expanded="false" aria-controls="charts">
              <i class="fas fa-file-invoice"></i>
                <span class="nav-text">Orders</span> <b class="caret"></b>
              </a>
              <ul class="collapse" id="charts" data-parent="#sidebar-menu">
                <div class="sub-menu">

                <li>
                    <a class="sidenav-item-link" href="">
                      <span class="nav-text">Orderlijst</span>

                    </a>
                  </li>


                  <li>
                    <a class="sidenav-item-link" href="">
                      <span class="nav-text">Order toevoegen</span>

                    </a>
                  </li>
                  <li>
                    <a class="sidenav-item-link" href="">
                      <span class="nav-text">Order Verwijderen</span>

                    </a>
                  </li>

                </div>
              </ul>
            </li>


            <li class="has-sub">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages" aria-expanded="false" aria-controls="pages">
                <i class="mdi mdi-image-filter-none"></i>
                <span class="nav-text">Klanten</span> <b class="caret"></b>
              </a>
              <ul class="collapse" id="pages" data-parent="#sidebar-menu">
                <div class="sub-menu">



                  <li>
                    <a class="sidenav-item-link" href="">
                      <span class="nav-text">Klantenlijst</span>

                    </a>
                  </li>
                  
                  <li>
                    <a class="sidenav-item-link" href="">
                      <span class="nav-text">Klant toevoegen</span>

                    </a>
                  </li>
                  <li>
                    <a class="sidenav-item-link" href="">
                      <span class="nav-text">Klant verwijderen</span>

                    </a>
                  </li>
                  <li>
                    <a class="sidenav-item-link" href="">
                      <span class="nav-text">Klant wijzigen</span>

                    </a>
                  </li>

                </div>
              </ul>
            </li>


          </ul>

        </div>

        <hr class="separator" />

        
      </div>
    </aside>