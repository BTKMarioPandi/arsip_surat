  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $photo; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $fullname; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header text-center">MAIN NAVIGATION</li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-envelope-o"></i>
              <span>Surat Keluar</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url().'surat/keluar'; ?>"><i class="fa fa-circle-o"></i> Lihat</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-envelope"></i>
              <span>Surat Masuk</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url().'surat/masuk'; ?>"><i class="fa fa-circle-o"></i> Lihat</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-list"></i>
              <span>Laporan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url().'surat/laporan'; ?>"><i class="fa fa-circle-o"></i> Lihat</a></li>
            </ul>
          </li>
        <?php if ($priv == 1): ?>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-gear"></i>
              <span>Setting</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url().'admin/user'; ?>"> <i class="fa fa-circle-o"></i> User</a></li>
              <li><a href="<?php echo base_url().'admin/priv'; ?>"> <i class="fa fa-circle-o"></i> Privilages</a></li>
              <li><a href="<?php echo base_url().'setting/bidang'; ?>"> <i class="fa fa-circle-o"></i> Bidang</a></li>
            </ul>
          </li>
        <?php endif ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
