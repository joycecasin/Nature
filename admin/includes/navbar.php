<div class="page-wrapper">
      <!-- Header -->
      <header class="main-header " id="header">
        <nav class="navbar navbar-static-top navbar-expand-lg">
          <!-- Sidebar toggle button -->
          <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
          </button>

          <div class="navbar-right ">
            <ul class="nav navbar-nav">
             <!-- User Account -->
              <li class="dropdown user-menu">
                <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">

                  <span class="d-none d-lg-inline-block"><?php $login_user = User::find_by_id($session->user_id); echo $login_user->username; ?></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                  <!-- User image -->
                  <li class="dropdown-header">
                    <img src="assets/img/user/user.png" class="img-circle" alt="User Image" />
                    <div class="d-inline-block">
                        <?php $login_user = User::find_by_id($session->user_id); echo $login_user->naam . " " . $login_user->voornaam; ?>

                    </div>
                  </li>

                  <li class="dropdown-footer">
                    <a href="logout.php"> <i class="mdi mdi-logout"></i> Log Out </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>

      </header>