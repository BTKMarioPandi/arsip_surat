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
              "url": "<?php echo base_url('setting/bidang/ajax_list')?>",
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
    $('#modal_add .modal-title').text('Tambah Data');
    $('#modal_add').modal('show'); // show bootstrap modal
  }

  function edit(id)
  {
    save_method = 'edit';
    $('#form_add')[0].reset();
    $.ajax({
      url : "<?php echo base_url('setting/bidang/edit/')?>"+id,
      type: "GET",
      dataType: "JSON",
      success: function(data)
      {
        $('[name="id"]').val(data.result.id_bidang);
        $('[name="namabidang"]').val(data.result.nama_bidang);
        $('#modal_add .modal-title').text('Edit Bidang/Seksi');
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
      url = "<?php echo base_url('setting/bidang/add')?>";
    }
    else if(save_method == 'edit')
    {
      url = "<?php echo base_url('setting/bidang/update')?>";
    }
    $.ajax({
      url : url,
      type: "POST",
      data: $('#form_add').serialize(),
      dataType: "JSON",
      success: function(data)
      {
        $('#modal_add').modal('hide');
        notify(data.status, data.status, data.ket);
        reload_table();
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
        notify('error', 'error', 'saving data error');
        // $.notify("Saving Error", "warn");
      }
    });
  }
  </script>