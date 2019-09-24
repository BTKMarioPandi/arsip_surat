<script type="text/javascript">
   
  var table;
  var save_method;
   
  $(document).ready(function() {
   
      //datatables
      table = $('#table').DataTable({ 
   
          "processing": false, //Feature control the processing indicator.
          "serverSide": true, //Feature control DataTables' server-side processing mode.
          "order": [], //Initial no order.
   
          // Load data for the table's content from an Ajax source
          "ajax": {
              "url": "<?php echo base_url('admin/priv/ajax_list')?>",
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

  function reload_table()
  {
    table.ajax.reload(null, false);
  }

  function add()
  {
    save_method = 'add';
    $('#form_add')[0].reset();
    $('#modal_add .modal-title').text('Add Data Privilages');
    $('#modal_add').modal('show'); // show bootstrap modal
  }

  function reset(id, name)
  {
    $('#form_reset')[0].reset();
    $('#modal_reset .modal-title').text('Reset Password '+name);
    $('#modal_reset').modal('show'); // show bootstrap modal
    $('[name="id_user"]').val(id);
  }

  function edit(id)
  {
    save_method = 'edit';
    $('#form_add')[0].reset();
    $.ajax({
      url : "<?php echo base_url('admin/priv/ajax_edit/')?>"+id,
      type: "GET",
      dataType: "JSON",
      success: function(data)
      {
        $('[name="inputIdPriv"]').val(data.result.id_priv);
        $('[name="inputDescPriv"]').val(data.result.desc_priv);
        $('[name="inputDescPrivMore"]').val(data.result.desc_priv_more);
        $('#modal_add .modal-title').text('Edit User');
        $('#modal_add').modal('show'); // show bootstrap modal
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
          notification('Error loading from ajax !!!');
      }
    });
  }

  function save()
  {
    var url;
    if(save_method == 'add')
    {
      url = "<?php echo base_url('admin/priv/add_priv')?>";
    }
    else if(save_method == 'edit')
    {
      url = "<?php echo base_url('admin/priv/update')?>";
    }
     // ajax adding data to database
     if ( !$('[name="inputDescPriv"]').val()) {
      notify('warning', 'notification', 'Data Must Be Set First');
     }
     else{
      $.ajax({
        url : url,
        type: "POST",
        data: $('#form_add').serialize(),
        dataType: "JSON",
        success: function(data)
        {
          // if add success
          $('#modal_add').modal('hide');
          notify(data.status, data.status, data.ket)
          reload_table();
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
          $('#modal_add').modal('hide');
          notify('error', 'error', 'saving data error');
          // $.notify("Saving Error", "warn");
        }
      });
     }
  }
  </script>