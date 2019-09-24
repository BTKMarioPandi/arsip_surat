  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Setting Nav and Menus
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">setting</a></li>
        <li class="active">Nav and Menus</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">

        </div>
      </div>

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div>
                <button class="btn btn-sm btn-default btn-flat" onclick="reload_nav()" data-toggle="tooltip" data-placement="top" title="refresh"><i class="fa fa-refresh"></i></button>
                <button class="btn btn-sm btn-info btn-flat" onclick="add_nav()" data-toggle="tooltip" data-placement="top" title="add"><i class="fa fa-plus"></i></button>
              </div>
              <hr>
              <table id="nav" class="table table-bordered table-striped" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>Name</th>
                          <th>Icon</th>
                          <th></th>
                      </tr>
                  </thead>
                  <tbody>
                  </tbody>
              </table>
            </div>
            <!-- /.col -->
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div>
                <button class="btn btn-sm btn-default btn-flat" onclick="reload_nav()" data-toggle="tooltip" data-placement="top" title="refresh nav"><i class="fa fa-refresh"></i></button>
                <button class="btn btn-sm btn-info btn-flat" onclick="add()" data-toggle="tooltip" data-placement="top" title="add"><i class="fa fa-plus"></i></button>
              </div>
              <hr>
              <table id="menu" class="table table-bordered table-striped" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>ID Privilages</th>
                          <th>Name</th>
                          <th>Description more</th>
                          <th></th>
                      </tr>
                  </thead>
                  <tbody>
                  </tbody>
              </table>
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Bootstrap modal -->
  <div class="modal fade" id="modal_nav_add" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-purple">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Book Form</h3>
        </div>
        <div class="modal-body form">
         <form action="#" id="form_nav_add" class="form-horizontal">
            <input type="hidden" value="" name="inputIdNav"/>
            <div class="form-body">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-3">Desc Nav</label>
                <div class="col-md-7 col-sm-7 col-xs-7">
                  <input name="inputDescNav" placeholder="Desc Nav" class="form-control" type="text">
                </div>
              </div>
            </div>
            <div class="form-body">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-3">Icon</label>
                <div class="col-md-7 col-sm-7 col-xs-7">
                  <input type="text" class="form-control" placeholder="Icon" name="inputFa"/>
                  <button class="btn btn-sm">?</button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" id="btnSave" onclick="save_nav()" class="btn btn-primary btn-sm btn-flat">Save</button>
          <button type="button" class="btn btn-danger btn-sm btn-flat" data-dismiss="modal">Cancel</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!-- End Bootstrap modal -->
  <script>
  var nav;
  var save_method;
   
  $(document).ready(function() {
   
    //datatables
    nav = $('#nav').DataTable({ 
 
        "processing": false, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo base_url('admin/menu/ajax_nav_list')?>",
            "type": "POST"
        },
 
        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],
 
    });
   
  });

  function reload_nav()
  {
    nav.ajax.reload(null, false);
  }

  function add_nav()
  {
    save_method = 'add';
    $('#form_nav_add')[0].reset();
    $('#form_nav_add .modal-title').text('Add Menus');
    $('#modal_nav_add').modal('show'); // show bootstrap modal
  }

  </script>