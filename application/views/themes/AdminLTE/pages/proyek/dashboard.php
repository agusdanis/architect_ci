    <!--
    <?php 
      if ($satu_proyek) { 
        foreach($satu_proyek as $pro) { 
          $nama_proyek = $pro->mpro_namaproyek;
        }
      } else { $nama_proyek = '';}
    ?>
    -->

    <section class="content-header">
      <!-- Display status message -->
      <?php if(!empty($success_msg)){ ?>
      <div class="col-xs-12">
          <div class="alert alert-success"><?php echo $success_msg; ?></div>
      </div>
      <?php }elseif(!empty($error_msg)){ ?>
      <div class="col-xs-12">
          <div class="alert alert-danger"><?php echo $error_msg; ?></div>
      </div>
      <?php } ?>

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>PROJECT DASHBOARD</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>

        <div class="row mb-12">
          <div class="col-sm-6">
            <?php if (count($proyek) > 1) { ?>
            <div class="col-md-6">
              <select class="form-control select2bs4" onchange="changeProyek(this)">
                <?php foreach ($proyek as $row_proyek) { ?>
                  <option value="<?php echo $row_proyek->mpro_id; ?>" <?php if ($row_proyek->mpro_id == $this->session->userdata('mpro_id')) { echo "selected"; }?>>
                    <?php echo $row_proyek->mpro_kodeproyek." ".$row_proyek->mpro_namaproyek; ?>
                  </option> ;
                <?php } ?>
              </select>
            </div>
            <?php } ?>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="row">

        <!-- kolom kanan -->
    
        <div class="column col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Grafik Jumlah Mandays</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              </div>
            </div>

            <div class="card-body">
              <div id="manPowerChart" style="height: 300px;"></div>
              <!--
              <div class="chart">
                <canvas id="valuesChart" style="height:230px; min-height:230px"></canvas>
              </div>
            -->
            </div>
            <div class="card-footer"></div>
        </div>
      </div> 
    
      <!-- column Kanan -->
      
      <!-- GRAFIK -->
    
      <div class="column col-md-6">
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Grafik Mandays vs Progress</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
            
            <div class="chart">
              <canvas id="valuesChart" style="height:300px; min-height:230px"></canvas>
            </div>
          
          </div>
          <div class="card-footer"></div>
      
        </div>
      </div>    
    

    </div> 
  </section>
    <!-- /.content -->

    
  
  <script type="text/javascript">
    
    var dataLabel       = [];
    var dataManPower    = [];
    var dataTicks       = [];
    var dataProd        = [];
    var dataProgress    = [];
    var dataMandaysVal  = [];
    

    $.getJSON("<?php echo site_url('proyek/get_daily_produktivitas');?>", function(dataProduktivitas) {
        //produktivitas = dataProduktivitas;
        var i;
        for (i=0; i < dataProduktivitas.length; i++) {
          dataLabel.push(dataProduktivitas[i].ttpsh0_tanggal);
          
          dataProgress.push(dataProduktivitas[i].progress/1000);
          dataProd.push(dataProduktivitas[i].produktivitas);
          dataMandaysVal.push(dataProduktivitas[i].mandays_value/1000);

          dataManPower.push([i,dataProduktivitas[i].ttpsh0_manpower]);
          dataTicks.push([i,dataProduktivitas[i].ttpsh0_tanggal]);
        }
      });

  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    
      


    if (dataMandaysVal.length > 0) {
    var areaChartData = {
      //labels  : ['01-11-19', '02-11-19', '03-11-19', '04-11-19'],
      labels  : dataLabel,
      datasets: [
        {
          label               : 'Mandays Values',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : dataMandaysVal //[5000, 6200, 5400]
        },
        
        {
          label               : 'Progress Values',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : dataProgress //[250, 250, 0 ]
        },
        
      ]
    }

    
      var areaChartOptions = {
        maintainAspectRatio : false,
        responsive : true,
        legend: {
          display: true
        },
        scales: {
          xAxes: [{
            gridLines : {
              display : false,
            }
          }],
          yAxes: [{
            gridLines : {
              display : false,
            }
          }]
        }
      }
    
    

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#valuesChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar', 
      data: barChartData,
      options: barChartOptions
    })

    }
 
    /*
     * BAR CHART
     * ---------
     */

    if (dataManPower.length > 0) { 
    var bar_data = {
      data : dataManPower, //[[1,10], [2,8], [3,4], [4,13], [5,17], [6,9]],
      bars: { show: true }
    }
    $.plot('#manPowerChart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
         bars: {
          show: true, barWidth: 0.5, align: 'center',
        },
      },
      colors: ['#3c8dbc'],
      xaxis : {
        ticks: dataTicks //[[1,'January'], [2,'February'], [3,'March'], [4,'April'], [5,'May'], [6,'June']]
      }
    });
    }

    /* END BAR CHART */


  })


  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }

  
  function changeProyek(x) {
    var id=$(x).val();
      //alert('sukses');
      
    $.ajax({
        url : "<?php echo site_url('home/set_mpro_id/');?>"+id,
        method : "POST",
        success: function(mpro_id){
          //getChartData();
          //console.log(dataLabel);
          //drawChart();
          //alert(mpro_id);
          location.reload(true);
        }
    });
  }
  
</script>