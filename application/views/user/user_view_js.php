
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
              "url": "<?php echo base_url('admin/user/ajax_list')?>",
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
    $.ajax({
      url : "<?php echo base_url('admin/user/ajax_privilages')?>",
      type: "GET",
      dataType: "JSON",
      success: function(data)
      {
        save_method = 'add';
        $('#form_add')[0].reset();
        $('select[name="priv"]').empty();
        $('select[name="priv"]').append('<option value="">-</option>');
        $.each(data.data, function(key, value) {
          $('select[name="priv"]').append('<option value="'+ value.id_priv +'">'+ value.desc_priv +'</option>');
        });
        $('#modal_add .modal-title').text('Add User');
        $('#modal_add').modal('show'); // show bootstrap modal
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
          notification('Error loading from ajax !!!');
      }
    });
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
      url : "<?php echo base_url('admin/user/ajax_edit/')?>"+id,
      type: "GET",
      dataType: "JSON",
      success: function(data)
      {
        $('[name="id_user"]').val(data.result.id_user);
        $('[name="username"]').val(data.result.username);
        $('[name="password"]').attr("disabled",'disabled');
        $('select[name="priv"]').empty();
        $('select[name="priv"]').append('<option value="">-</option>');
        $.each(data.data, function(key, value) {
          if (value.id_priv == data.result.privilages_user) {
            $('select[name="priv"]').append('<option value="'+ value.id_priv +'" selected="selected">'+ value.desc_priv +'</option>');
          }
          else{
            $('select[name="priv"]').append('<option value="'+ value.id_priv +'">'+ value.desc_priv +'</option>');
          }          
        });
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
      url = "<?php echo base_url('admin/user/add_user')?>";
    }
    else if(save_method == 'edit')
    {
      url = "<?php echo base_url('admin/user/update')?>";
    }
     // ajax adding data to database
    $.ajax({
      url : url,
      type: "POST",
      data: $('#form_add').serialize(),
      dataType: "JSON",
      success: function(data)
      {
        // if add success
        if (data.status == 0) {
          $('#modal_add').modal('hide');
          notify('warning', 'WARNING !!!', data.ket);
        }else{
          $('#modal_add').modal('hide');
          notify('success', 'Success', 'saving data success');
          reload_table();
        }
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
        $('#modal_add').modal('hide');
        notify('error', 'error', 'saving data error');
        // $.notify("Saving Error", "warn");
      }
    });
  }

  function save_reset()
  {
    $.ajax({
      url : "<?php echo base_url('admin/user/reset')?>",
      type: "POST",
      data: $('#form_reset').serialize(),
      dataType: "JSON",
      success: function(data)
      {
        // if add success
        if (data.key == 0) {
          $('#modal_reset').modal('hide');
          notify('warning', 'Notify', data.status);
        }
        else{
          $('#modal_reset').modal('hide');
          notify('success', 'Success', 'Update data success');
          reload_table();
        }
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
        $('#modal_reset').modal('hide');
        notify('error', 'error', 'saving data error');
        // $.notify("Saving Error", "warn");
      }
    });
  }
  </script>