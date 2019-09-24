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
              "url": "<?php echo base_url('surat/masuk/ajax_list')?>",
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

  $('#tgl').datepicker({
      autoclose: true,
      format: 'dd-mm-yyyy'
  });
  $('#tgl_te').datepicker({
      autoclose: true,
      format: 'dd-mm-yyyy'
  })


  function reload_table()
  {
    table.ajax.reload(null, false);
  }

  function add()
  {
    save_method = 'add';
    $('#form_add')[0].reset();
    $.ajax({
      url : "<?php echo base_url('surat/masuk/add_ajax')?>",
      type: "GET",
      dataType: "JSON",
      success: function(data)
      {
        // console.log(data);
        $('[name="pengolah"]').empty();
        $('[name="pengolah"]').append('<option value="0">Pilih Satu</option>');
        $.each(data.bidang, function(key, value) {
          $('[name="pengolah"]').append('<option value="'+ value.id_bidang +'">'+ value.nama_bidang +'</option>');       
        });
        $('#modal_add .modal-title').text('Tambah Data');
        $('#modal_add').modal('show'); // show bootstrap modal
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
          notify('error', 'error', 'Error Loading From Ajax');
      }
    });
  }

  function edit(id)
  {
    save_method = 'edit';
    $('#form_add')[0].reset();
    $.ajax({
      url : "<?php echo base_url('surat/masuk/edit/')?>"+id,
      type: "GET",
      dataType: "JSON",
      success: function(data)
      {
        $('[name="id"]').val(data.result.id_suma);
        $('[name="no"]').val(data.result.no_suma);
        $('[name="pengirim"]').val(data.result.pengirim_suma);
        $('[name="perihal"]').val(data.result.perihal_suma);
        $('[name="tgl"]').val(data.result.tgl_suma);
        $('[name="tgl_te"]').val(data.result.diterima_suma);
        $('[name="disposisi"]').val(data.result.disposisi);
        $('[name="pengolah"]').empty();
        $('[name="pengolah"]').append('<option value="0">Pilih Satu</option>');
        $.each(data.bidang, function(key, value) {
          if (data.result.bidang === value.id_bidang) {
            $('[name="pengolah"]').append('<option value="'+ value.id_bidang +'" selected>'+ value.nama_bidang +'</option>');
          }
          else{
            $('[name="pengolah"]').append('<option value="'+ value.id_bidang +'">'+ value.nama_bidang +'</option>');
          }       
        });
        $('#modal_add .modal-title').text('Edit Data');
        $('#modal_add').modal('show'); // show bootstrap modal
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
          notify('error', 'error', 'saving data error');
      }
    });
  }

  function upload(id)
  {
    var u = "<?php echo base_url().'assets/image/surat/masuk/'; ?>";
    $('#form_upload')[0].reset();
    $('[name="id"]').val(id);
    $.ajax({
      url: "<?php echo base_url().'surat/masuk/lihat_scan/'; ?>"+id,
      type: "POST",
      data: new FormData(this),
      processData: false,
      contentType:false,
      cache : false,
      async : true,
    })
    .done(function(data) {
      $('#list_scan').empty();
      $.each(data, function(key, value) {
        var a = "<span id="+value.id+">"+value.deskripsi+" <button type='button' class='btn btn-xs btn-primary btn-flat' data-toggle='tooltip' data-placement='top' title='hapus data' onclick=\"hapus('"+value.id+"')\"><i class='fa fa-trash'></i></button> <a class='btn btn-xs btn-info btn-flat' href='"+u+value.path+"' target='_blank' data-toggle='tooltip' data-placement='top' title='lihat file'><i class='fa fa-download'></i></a></span> <br/><br/>";
        $('#list_scan').append(a);
      });
      $('#modal_upload .modal-title').text('Upload File');
      $('#modal_upload').modal('show'); // show bootstrap modal
    })
    .fail(function() {
      notify('error', 'error', "error");
    });
  }

  function hapus(id)
  {
    $.ajax({
      url: "<?php echo base_url().'surat/masuk/hapus_scan/'; ?>"+id,
      type: "POST",
      data: new FormData(this),
      processData: false,
      contentType:false,
      cache : false,
      async : true,
    })
    .done(function(data) {
      notify(data.status, data.status, data.ket);
      $('#'+data.id+'').remove();
    })
    .fail(function() {
      notify('error', 'error', "error");
    });
  }

  $('#form_upload').submit(function(event) {
    /* Act on the event */
    $.ajax({
      url: "<?php echo base_url().'surat/masuk/upload'; ?>",
      type: "POST",
      data: new FormData(this),
      processData: false,
      contentType:false,
      cache : false,
      async : true,
    })
    .done(function(data) {
      if (data.stat == 0) {
        notify('error', 'error', data.error.error);
      }
      else{
        // $('#photo1').attr("src", data.result);
        // $('#list_scan').empty();
        var a = "<span id="+data.id+">"+data.nama+" <button type='button' class='btn btn-xs btn-primary btn-flat' data-toggle='tooltip' data-placement='top' title='hapus data' onclick=\"hapus('"+data.id+"')\"><i class='fa fa-trash'></i></button> <a class='btn btn-xs btn-info btn-flat' href='"+data.photo+"' target='_blank' data-toggle='tooltip' data-placement='top' title='lihat file'><i class='fa fa-download'></i></a><br/><br/></span>";
        $('#list_scan').append(a);
        $('#form_upload')[0].reset();
        notify('success', 'success','upload successfully');
      }
    })
    .fail(function() {
      notify('error', 'error', "error");
    });
    event.preventDefault();
  });

  function save()
  {
    var url;
    if(save_method == 'add')
    {
      url = "<?php echo base_url('surat/masuk/add')?>";
    }
    else if(save_method == 'edit')
    {
      url = "<?php echo base_url('surat/masuk/update')?>";
    }
    $.ajax({
      url : url,
      type: "POST",
      data: $('#form_add').serialize(),
      dataType: "JSON",
      success: function(data)
      {
        if (data.kode == 1) {
          notify(data.status, data.status, data.ket);
        }
        else{
          $('#modal_add').modal('hide');
          notify(data.status, data.status, data.ket);
          reload_table();
        }
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
        notify('error', 'error', 'saving data error');
        // $.notify("Saving Error", "warn");
      }
    });
  }
  </script>