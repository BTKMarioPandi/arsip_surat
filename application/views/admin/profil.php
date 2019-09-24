<style>
  [hidden] {
    display: none !important;
  }
  #image-holder {
    width: 100%;
    height: 300px;
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
  }
</style>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive" src="<?php echo "$photo"; ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $fullname; ?></h3>

              <p class="text-muted text-center" id="email_profil">
              </p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <!-- <h3 class="box-title">About Me</h3> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">Malibu, California</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p> -->

              <hr>

              <!-- <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong> -->

              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p> -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#settings" data-toggle="tab">Settings</a></li>
              <li><a href="#change_password" data-toggle="tab">Change Password</a></li>
              <li><a href="#change_photo" data-toggle="tab">Change photo</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="settings">
                <form class="form-horizontal" id="form_settings">
                  <div class="form-group">
                    <label for="inputFullName" class="col-sm-2 col-xs-3 control-label">Full Name</label>
                    <div class="col-sm-8 col-xs-9">
                      <input type="text" class="form-control" name="inputFullName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputFullName" class="col-sm-2 col-xs-3 control-label">Email</label>
                    <div class="col-sm-8 col-xs-9">
                      <input type="email" class="form-control" name="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputFullName" class="col-sm-2 col-xs-3 control-label">Address</label>
                    <div class="col-sm-8 col-xs-9">
                      <textarea class="form-control" name="inputAddress" placeholder="address"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="reset" class="btn btn-sm btn-info btn-flat">Reset</button>
                      <input type="submit" class="btn btn-sm btn-success btn-flat" name="submit" value="Submit">
                      <!-- <button type="button" class="btn btn-sm btn-success btn-flat" onclick="setting()">Submit</button> -->
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="change_photo">
                <form class="form-horizontal" id="form_change_photo">
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-xs-offset-2 col-sm-4 col-xs-7">
                      <div id="image-holder"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-xs-offset-2 col-sm-4 col-xs-7">
                      <label class="btn btn-sm btn-flat btn-info btn-block">
                        choose<input type="file" name="profil_photo" hidden accept="image/png, image/jpeg, image/jpg">
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-xs-offset-2 col-sm-4 col-xs-7">
                      <label id="save_photo" class="btn btn-sm btn-flat btn-success btn-block" required>
                        Save<input type="submit" value="Save" hidden>
                      </label>
                    </div>
                  </div>
                </form>
                <div id="progres_upload" class="progress progress-sm active">
                  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                    <span class="sr-only">20% Complete</span>
                  </div>
                </div>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="change_password">
                <form class="form-horizontal" id="form_change_password">
                  <div class="form-group">
                    <label for="inputFullName" class="col-sm-2 col-xs-3 control-label">Old Password</label>
                    <div class="col-sm-8 col-xs-9">
                      <input type="password" class="form-control" name="inputOldPassword" placeholder="Old Password" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputFullName" class="col-sm-2 col-xs-3 control-label">New Password</label>
                    <div class="col-sm-8 col-xs-9">
                      <input type="password" class="form-control" name="inputNewPassword" placeholder="New Password" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputFullName" class="col-sm-2 col-xs-3 control-label">Retype Password</label>
                    <div class="col-sm-8 col-xs-9">
                      <input type="password" class="form-control" name="inputRetypePassword" placeholder="Retype New Password" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="reset" class="btn btn-sm btn-info btn-flat">Reset</button>
                      <input type="submit" class="btn btn-sm btn-success btn-flat" name="submit" value="Submit">
                      <!-- <button type="button" class="btn btn-sm btn-success btn-flat" onclick="setting()">Submit</button> -->
                    </div>
                  </div>
                </form>
              </div>
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
