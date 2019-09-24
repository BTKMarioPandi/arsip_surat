<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title = isset($title) ?  $title : ''; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php
  /** -- Copy from here -- */
  if(!empty($meta))
    foreach($meta as $name=>$content){
      echo "\n";
      ?><meta name="<?php echo $name; ?>" content="<?php echo $content; ?>" /><?php
         }
    echo "\n";

    if(!empty($canonical))
    {
      echo "\n";
      ?><link rel="canonical" href="<?php echo $canonical?>" /><?php

    }
    echo "\n";
    /** -- to here -- */
  ?>
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/themes/adminlte'; ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/themes/adminlte'; ?>/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/themes/adminlte'; ?>/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Pace style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/adminlte/plugins/pace/pace.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/themes/adminlte'; ?>/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/themes/adminlte'; ?>/dist/css/skins/_all-skins.min.css">
  <!-- notityjs -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/themes/adminlte'; ?>/bower_components/notifyjs/dist/styles/metro/notify-metro.css">
<?php foreach($css as $file){
    echo "\n"; ?>
    <link rel="stylesheet" href="<?php echo base_url().$file; ?>" type="text/css" /><?php
  }
 ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- jQuery 3 -->
  <script src="<?php echo base_url().'assets/themes/adminlte'; ?>/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url().'assets/themes/adminlte'; ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

<!-- =============================================== -->
  <?php echo $sidebar = isset($sidebar) ?  $sidebar : ''; ?>
  <!-- =============================================== -->
  <?php echo $content; ?>
  <!-- =============================================== -->
  <?php echo $control_sidebar = isset($control_sidebar) ?  $control_sidebar : ''; ?>
  
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved. {elapsed_time} <?php echo $this->benchmark->memory_usage();?>
  </footer>

  <!-- control-sidebar -->
  
</div>
<!-- ./wrapper -->

<!-- Modal -->
<!--Modal: modalConfirmDelete-->
<div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm modal-notify modal-default" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center bg-maroon">
        <p class="heading">Are you sure?</p>
      </div>
      <!--Body-->
      <div class="modal-body" style="background-color: white;">
        <i class="fa fa-times fa-4x"></i>
        <h6 class="txtDelete"></h6>
      </div>
      <!--Footer-->
      <div class="modal-footer flex-center">
        <a href="" id="delete_link" class="btn  bg-purple btn-flat">Yes</a>
        <a type="button" class="btn  btn-danger btn-flat" data-dismiss="modal">No</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: modalConfirmDelete-->

<!--Modal: notification-->
<div class="modal fade" id="notification" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-sm" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center bg-purple">
        <p class="heading">
          <table class="col-md-12 col-sm-12 col-xs-12 no-border">
            <tr>
              <td class="col-md-2 col-sm-4 col-xs-4"></td>
              <td><i class="fa fa-bell fa-2x"></i></td>
              <td><h4>NOTIFICATION</h4></td>
              <td class="col-md-2 col-sm-4 col-xs-4"></td>
            </tr>
          </table>
      </div>
      <!--Body-->
      <div class="modal-body">
        <p id="text"> Do you want to receive the push notification about the newest posts?</p>
      </div>
      <!--Footer-->
      <div class="modal-footer flex-center">
        <a type="button" class="btn bg-navy btn-sm btn-flat waves-effect" data-dismiss="modal">Close</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: notification-->
<!-- modal close -->
<!-- SlimScroll -->
<script src="<?php echo base_url().'assets/themes/adminlte'; ?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/themes/adminlte'; ?>/bower_components/fastclick/lib/fastclick.js"></script>
<!-- PACE -->
<script src="<?php echo base_url(); ?>assets/themes/adminlte/bower_components/PACE/pace.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/themes/adminlte'; ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/themes/adminlte'; ?>/dist/js/demo.js"></script>
<!-- notify  js -->
<script src="<?php echo base_url().'assets/themes/adminlte'; ?>/bower_components/notifyjs/notify.min.js"></script>
<script src="<?php echo base_url().'assets/themes/adminlte'; ?>/bower_components/notifyjs/dist/styles/metro/notify-metro.js"></script>
  <?php foreach($js as $file){
      echo "\n"; 
      ?><script src="<?php echo base_url().$file; ?>"></script><?php
    }
   ?>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  });

  $(document).ajaxStart(function () {
    Pace.restart()
  });

  $('body').tooltip({selector: '[data-toggle="tooltip"]'});

  function confirm_delete(delete_url,title)
  {
    jQuery('#modalConfirmDelete').modal('show', {backdrop: 'static',keyboard :false});
    jQuery("#modalConfirmDelete .txtDelete").text(title);
    document.getElementById('delete_link').setAttribute("href" , delete_url );
    document.getElementById('delete_link').focus();
    $('#modalConfirmDelete').modal('show');
  }

  function notification(notif)
  {
    $('#notification #text').text(notif);
    $('#notification').modal('show');
  }

  function notify(style, title, text) {
        $.notify({
            title: title,
            text: text,
            image : '<i class="fa fa-bell fa-2x"></i>'
        }, {
            style: 'metro',
            className: style,
            autoHide: true,
            clickToHide: true,
            autoHideDelay: 5000,
        });
    }
</script>
</body>
</html>
