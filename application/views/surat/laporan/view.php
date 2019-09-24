  <script src="<?php echo base_url(); ?>assets/themes/adminlte/bower_components/chart.js/Chart.min.js"></script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Laporan Surat
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Surat</a></li>
        <li class="active">Laporan</li>
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
            <div class="col-md-12 col-sm-12 col-xs-12">
              <form action="" id="form_add" class="form-horizontal" method="post">
                <div class="form-body">
                  <div class="form-group">
                    <label class="control-label col-md-1 col-sm-3 col-xs-3">Bulan</label>
                    <div class="col-md-3 col-sm-7 col-xs-7">
                      <input class="form-control" name="tgl" id="tgl" required/>
                    </div>
                  </div>
                </div>
                <div class="form-body">
                  <div class="form-group">
                    <label class="control-label col-md-1 col-sm-3 col-xs-3">Jenis Surat</label>
                    <div class="col-md-3 col-sm-7 col-xs-7">
                      <select name="jenis" class="form-control" required>
                        <option value="">pilih satu</option>
                        <option value="1">Surat Keluar</option>
                        <option value="2">Surat Masuk</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-body">
                  <div class="form-group">
                    <label class="control-label col-md-1 col-sm-3 col-xs-3"></label>
                    <div class="col-md-3 col-sm-7 col-xs-7">
                      <input type="submit" value="lihat" class="btn btn-sm btn-info pull-right">
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          <hr>
          <?php if ($kode == 2): ?>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <h4 class="text-center"><?php echo $ket2; ?></h4>
              <!-- <canvas id="myChart"></canvas> -->
              <!-- <div class="chart">
                <canvas id="areaChart" style="height:250px"></canvas>
              </div> -->
              <div class="chart">
                <canvas id="lineChart" style="height:250px"></canvas>
              </div>
            </div>
          </div>
          <?php endif ?>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <?php if ($kode == 2): ?>
          <a href="<?php echo base_url().'surat/laporan/excel/'.$jenis.'/'.$b; ?>" class="btn btn-sm btn-success"> export</a>
          <?php endif ?>
        </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php if ($kode == 2): ?>
  <?php 
  $x = 0;
  $lab = array();
  $datanya = array();
  $bg = array();
  foreach ($hasil as $k) {
    # code...
    $lab[$x] = $k->Date.'-'.$b;
    $datanya[$x] = $k->Total;
    $bg[$x] = "#08a1ef";
    $x++;
  }
   ?>

  <script type="text/javascript">

  // var ctx = document.getElementById("myChart").getContext('2d');
  // var myChart = new Chart(ctx, {
  //     type: 'bar',
  //     data: {
  //         labels: <?php echo json_encode($lab); ?>,
  //         datasets: [{
  //             label: 'Jumlah',
  //             data: <?php echo json_encode($datanya); ?>,
  //             backgroundColor: <?php echo json_encode($bg); ?>
  //           }]
  //     },
  //     options: {
  //         scales: {
  //             yAxes: [{
  //                 ticks: {
  //                     beginAtZero:true
  //                 }
  //             }]
  //         }
  //     }
  // });

  // Get context with jQuery - using jQuery's .get() method.
    // var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
    // This will get the first returned node in the jQuery collection.
    // var areaChart       = new Chart(areaChartCanvas)

    var areaChartData = {
      labels  : <?php echo json_encode($lab); ?>,
      datasets: [
        {
          label               : 'Digital Goods',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : <?php echo json_encode($datanya); ?>
        }
      ]
    }

    var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale               : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : false,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - Whether the line is curved between points
      bezierCurve             : true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension      : 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot                : false,
      //Number - Radius of each point dot in pixels
      pointDotRadius          : 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth     : 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius : 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke           : true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth      : 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill             : true,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio     : true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive              : true
    }

    //Create the line chart
    // areaChart.Line(areaChartData, areaChartOptions)

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas          = $('#lineChart').get(0).getContext('2d')
    var lineChart                = new Chart(lineChartCanvas)
    var lineChartOptions         = areaChartOptions
    lineChartOptions.datasetFill = false
    lineChart.Line(areaChartData, lineChartOptions)
  </script>
<?php endif ?>