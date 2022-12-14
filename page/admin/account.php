<?php include 'plugins/navbar.php';?>
<?php include 'plugins/sidebar/accountbar.php';?>
  <!-- Main Sidebar Container -->

 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Account Management</h1>
            <br>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Account Management</li>
            </ol>
          </div><!-- /.col -->
           <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
             <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#add_acc">Add Account</a>
            </ol>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">
                </h3> 
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                   <div class="row">
                    <div class="col-3">
                    <label>ID Number:</label> <input type="text" name="id_number" id="id_number" class="form-control">
                    </div>
                    <div class="col-3">
                    <label>Name:</label> <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="col-2">
                      <label>Course:</label> <input type="text" name="course" id="course" class="form-control">
                    </div>
                    <div class="col-2">
                      <label>User Type:</label>
                      <select id="user_type" class="form-control">
                        <option value="">Select User Type</option>
                        <option value="admin">Admin</option>
                        <option value="student">Student</option>
                      </select>
                    </div>
                     <div class="col-2">
                      <span style="visibility:hidden;">.</span>
                      <p style="text-align:right;"><a href="#" class="btn btn-primary" onclick="load_accounts()">Search <i class="fa fa-search"></a></i></p>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-12">
                       <div class="card-body table-responsive p-0" style="height: 450px;">
                <table class="table table-head-fixed text-nowrap table-hover" id="">
                <thead style="text-align:center;">
                    <th>#</th>
                    <th>ID Number</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Year/Section</th>
                    <th>Email</th>
                    <th>User Type</th>
            </thead>
            <tbody id="list_of_accounts" style="text-align:center;"></tbody>
            </table>
             <div class="row">
                  <div class="col-6">
                    
                  </div>
                  <div class="col-6">
                    <div class="spinner" id="spinner" style="display:none;">
                        <div class="loader float-sm-center"></div>    
                    </div>
             
                  </div>
              </div>

              </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                
                </div>
              </form>
            </div>
            <!-- /.card -->

</div>
</div>
</div>
</section>
</div>

<?php include 'plugins/footer.php';?>
<?php include 'plugins/javascript/account_script.php';?>
