  <aside class="main-sidebar sidebar-dark-info elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../../dist/img/logo.ico" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Sports Management</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user.png" class="img-circle elevation-2" alt="User Image">

        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$username;?></a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="dashboard.php" class="nav-link ">
              <i class="fas fa-bullhorn"></i>
              <p>
                Announcement
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="players.php" class="nav-link ">
              <i class="fas fa-users"></i>
              <p>
                List of Prospect Players
               
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="acquired.php" class="nav-link">
              <i class="fas fa-hand-holding"></i>
              <p>
                List of Acquired Items
               
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="returned.php" class="nav-link">
              <i class="fas fa-handshake"></i>
              <p>
                List of Returned Items
               
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="equipment.php" class="nav-link active">
              <i class="fas fa-box"></i>
              <p>
                Equipment Management
               
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="facilities.php" class="nav-link">
              <i class="fas fa-university"></i>
              <p>
                Facilities Management
               
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="account.php" class="nav-link">
              <i class="fas fa-user-cog"></i>
              <p>
                Account Management
               
              </p>
            </a>
          </li>
          </li>  
         <?php include 'logout.php' ;?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
