 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Profile
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-home"></i> Dashboard</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        
        <!-- /.col -->
        <div class="col-xl-12 col-lg-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">

              <li><a   data-toggle="tab"><b>UPDATE PROFILE</b></a></li>
            </ul>
                        
            <div class="tab-content">
            
                <form class="form-horizontal form-element col-12" method="POST">
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="admin_name" name="admin_name" placeholder="" value="<?php if(!empty($admin_data['user_name'])) { echo $admin_data['user_name']; }?>" required="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="admin_email" name="admin_email" placeholder="" value="<?php if(!empty($admin_data['user_email'])) { echo $admin_data['user_email']; }?>" required="">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputPhone" class="col-sm-2 control-label">Phone</label>

                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="admin_phone" name="admin_phone" placeholder="" value="<?php if(!empty($admin_data['user_phone'])) { echo $admin_data['user_phone']; }?>" required="">
                    </div>
                  </div>

                  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                
                  <div class="form-group row">
                    <div class="ml-auto col-sm-10">
                      <button type="submit" class="btn btn-success" name="profile_update" value="profile_update">UPDATE</button>
                    </div>
                  </div>
                </form>
             
              <!-- /.tab-pane -->
            </div>

            <div class="tab-content">

               <ul class="nav nav-tabs">

              <li><a   data-toggle="tab"><b>UPDATE PASSWORD</b></a></li><br><br>
            </ul><br>
            
                <form action="<?php echo base_url('admin_update_pass');?>" class="form-horizontal form-element col-12" method="POST">
                  
                 
                   <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 control-label">Old Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="old_pass" name="old_pass" placeholder="Enter your old password here." required="">
                    </div>

                   
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 control-label">New Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="new_pass" name="new_pass" placeholder="Enter your new password here." required="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 control-label">Confirm Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="confirm_pass" name="confirm_pass" placeholder="Enter confirm password here." required="">
                    </div>
                  </div>
                 
                  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                
                  <div class="form-group row">
                    <div class="ml-auto col-sm-10">
                      <button type="submit" class="btn btn-success" id="password_update" name="password_update" value="password_update">UPDATE</button>
                    </div>
                  </div>
                </form>
             
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->

        

          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
 