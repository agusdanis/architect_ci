    <?php 
      if ($satu_proyek) { 
        foreach($satu_proyek as $pro) { 
          $nama_proyek = $pro->mpro_namaproyek;
        }
      } else { $nama_proyek = '';}
    ?>

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
            <h1>Laporan Harian Supervisor</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Laporan Harian</li>
            </ol>
          </div>
        </div>

        <div class="row mb-6">
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
              <!--<button class="btn-sm btn-primary">Tambah</button>-->
              <h3 class="card-title">Summary Aktivitas harian</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
                <!--<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>-->
              </div>
            </div>

            <div class="card-body">
              <div class="row">
              </div>

              <table id="tabelLaporanHarian" class="table tabel-manpower table-hover table-responsive">
                <thead>
                  <tr>
                    <th width="35%">Tanggal</th>
                    <th width="15%">Total Tenaga</th>
                    <th width="15%">Nilai Tenaga</th>
                    <th width="10%">Progress</th>
                    <th width="10%">Produktivitas</th>
                  </tr>
                </thead>
                <tbody id="dataLapHar" class="dataLapHar"> 
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          <div class="card-footer">
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
      </div> <!-- column Kanan -->
        
        <!-- column Kiri -->
        <div class="column col-md-6">
          <div class="card">
            <div class="card-header">
              <div class="card-title">
                
                <div class="row">
                <div class="input-group col-md-8">
                  <input id="tgl_laporan" type="date" class="form-control">
                  <div class="input-group-prepend">
                    <!--<span class="input-group-text"><i class="btn-sm fas fa-plus"></i></span>-->
                    <!--<button type="button" class="btn-sm"><i class="fas fa-plus"></i></button>-->
                    <button class="btn btn-add-laporan btn-primary"><i class="fas fa-plus"></i></button>
                  </div>
                </div>

                <div align="left" class="col-md-2">
                  <button id="btn-simpan-manpower" class="btn btn-simpan-manpower btn-primary" disabled>Simpan</button>
                </div>
                </div>

              </div>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <!--<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fas fa-times"></i></button>-->
              </div>
            </div>
          <div class="card-body">
            <div class="row">
            </div>
            <table id="tabelManPower" width="100" class="table table-hover table-responsive p-2">
              <thead>
                <tr>
                  <th width="15%">Supervisor<br/>
                      Subkon</th>
                  <th width="10%">Total Tenaga</th>
                  <th width="10%">Nilai Tenaga</th>
                  <th width="10%">Hasil Kerja</th>
                  <th width="10%">Prod.</th>
                  <!--<th style="width: 10%">Aksi</th>-->
                </tr>
              </thead>
              <tbody id="dataManPower"></tbody>
            </table>
            <tfoot>
              <!--
              <div align="left" class="col-md-12">
                <button id="btn-simpan-manpower" class="btn-sm btn-simpan-manpower btn-primary" disabled>Simpan</button>
              </div>
            -->
            </tfoot>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
      </div> <!-- column Kiri -->
      
      <!-- GRAFIK -->
    <!--
      <div class="column col-md-6">
      
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Grafik Produktivitas</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="height:230px; min-height:230px"></canvas>
                </div>
              </div>
      
            </div>
      
      </div>    
    -->

    </div> 
  </section>
    <!-- /.content -->

    
  
  <script type="text/javascript">

    
      $.ajax({
          url : "<?php echo site_url('admin/get_user_permit');?>",
          method : "POST",
          success: function(userPermit){
            setPermittion(JSON.parse(userPermit).prop.PROYEK);
            //return JSON.parse(userPermit).prop.PROYEK;
            //console.log(JSON.parse(userPermit).prop.PROYEK.EDITRAP_SPV.create);
          }
      });
    

    function setPermittion(permit) {
        //console.log(permit);
        var editLapHar = permit.EDIT_LAPHAR.create == 'no' ? true : false;
        $(".btn-add-laporan").attr("disabled", editLapHar);
        if (editLapHar == true) {
          document.getElementById('btn-simpan-manpower').style.display="none"; }
        else {document.getElementById('btn-simpan-manpower').style.display="block";}
        //$("#pilihPelaksana").attr("disabled", editSUB);
        //$("#pilihSPK").attr("disabled", editSPK);
    } 
    
    $('#tgl_laporan').on("change", function() {  // id tgl_laporan change
      var tgl = $(this).val();
      get_detailHarian(tgl);
    });

    $('.btn-simpan-manpower').on("click", function() {
      //alert('Maaf, belum berfungsi boss');
      var tabel = document.getElementById("tabelManPower");
      var rowCount = tabel.rows.length-1;
      //alert(tabel.rows.length);
      //var tgl = document.getElementById('tgl_laporan').value;
      if (rowCount !== 0) {  // jika detail tabel tidak kosong
        if (confirm("Yakin data sudah benar ?") == true) { // jika simpan dikonfirmasi OK
          simpanDataManPower();
          $('.btn-simpan-manpower').attr("disabled", true);
          showListLapHar(<?php echo $this->session->userdata('mpro_id')?>, <?php echo $this->session->userdata('user_id')?>);
        } else {
          alert('Data tidak disimpan !');
        }
      } else {
        alert("Detail kosong !");  
      }
    });

    function simpanDataManPower() {
      //alert('Ok boss');
      var TableManPower = new Array();
      
      //$('#tabel_detail > tbody > tr').each(function(row, tr){

      $('#dataManPower > tr').each(function(row, tr){  
        TableManPower[row]={
          "ttpsh1_spv_id"           : $(tr).find('td:eq(0) input#spv_id').val(),
          "ttpsh1_id"               : $(tr).find('td:eq(0) input#ttpsh1_id').val(),
          "ttpsh1_msub_id"          : $(tr).find('td:eq(0) input#msub_id').val(),
          "ttpsh1_msub_nama_subkon" : $(tr).find('td:eq(0)').text(),
          "ttpsh1_tanggal"          : document.getElementById('tgl_laporan').valueAsDate,
          "ttpsh1_manpower"         : $(tr).find('td:eq(1) input').val()
        }
      });
      
      var jsonManPower = JSON.stringify(TableManPower);
        //console.log(jsonManPower);
        //alert(jsonRows);
        if (jsonManPower) {
          $.ajax({
            url : "<?php echo site_url('terpasang/editLaporanHarian');?>",
            method : "POST",
            data : {dataManPower: jsonManPower},
            success: function(data){
              alert(data);
            },
            error : function(request, status, error) {
              alert(error);
          } 
        });
      }
    }

    $('.btn-add-laporan').on("click", function() {
      var tgl = document.getElementById('tgl_laporan').value;
      //alert(tgl);
      $.getJSON("<?php echo site_url('terpasang/get_subkonProyekOnRAP/');?>"+tgl, function(dataSubkon) {
        if (dataSubkon !== 'empty') {
          fillTableManPower(dataSubkon);  
          
          $('.btn-simpan-manpower').attr("disabled", false);          

        } else {
          //alert('No data');
         }
      });
    });

      function fillEmptyTableManPower(dataSubkon) {
        var html = '';
        var i;
        for (i=0; i<dataSubkon.length; i++) {
          html += 
            '<tr>'+
              '<td>'+dataSubkon[i].spv_namalengkap+'<br>'+
              '<input id="spv_id" type="hidden" value="'+dataSubkon[i].spv_id+'"">'+
              '<br/>'+
              dataSubkon[i].msub_nama_subkon+'<br>'+
              '<input id="msub_id" type="hidden" value="'+dataSubkon[i].ttpsh1_msub_id+'"">'+
              '<input id="ttpsh1_id" type="text" value="0'+'"">'+
              '</td>'+
              //'<td style="text-align: right">'+data[i].ttpsh0_manpower+' org</td>'+
              '<td><input style="text-align: right" value="0" class="form-control">'+'</td>'+
              '<td style="text-align: right">0'+'k</td>'+
              '<td style="text-align: right">0'+'k</td>'+
              '<td style="text-align: right">0'+'</td>'+ 
              '<td>'+'</td>'+
              '<td class="text-right">'+
                    '<a class="btn btn-primary btn-sm" title="Tambah hasil" href="<?php echo site_url('terpasang/form_detailTerpasang/');?>'+dataSubkon[i].msub_id+'/'+dataSubkon[i].ttpsh1_id+'" data-toggle="tooltip">'+
                      '<i class="fas fa-pencil-alt"></i>'+
                    '</a>'+
              '</td>'+
            '</tr>';
        }
        $('#dataManPower').html(html);
      }

      function fillTableManPower(dataSubkon) {
        var html = '';
        var i;
        for (i=0; i<dataSubkon.length; i++) {
          html += 
            '<tr>'+
              '<td>'+dataSubkon[i].spv_namalengkap+'<br>'+
              dataSubkon[i].msub_nama_subkon+'<br>'+
              '<input id="spv_id" type="hidden" value="'+dataSubkon[i].spv_id+'"">'+
              //'<br/>'+
              
              '<input id="msub_id" type="hidden" value="'+dataSubkon[i].msub_id+'"">'+
              '<input id="ttpsh1_id" type="hidden" value="'+dataSubkon[i].ttpsh1_id+'"">'+
              '</td>'+
              //'<td style="text-align: right">'+data[i].ttpsh0_manpower+' org</td>'+
              '<td><input style="text-align: right" value="'+dataSubkon[i].ttpsh1_manpower+'"class="form-control">'+'</td>'+
              '<td style="text-align: right">'+dataSubkon[i].mandays_value/1000+'k</td>'+
              '<td style="text-align: right">'+dataSubkon[i].total_prog/1000+'k</td>'+
              '<td style="text-align: right">'+number_format(dataSubkon[i].produktivitas*1,3,'.',',')+'</td>'+ 
              '<td>'+'</td>'+
              '<td class="text-right">'+
                    '<a class="btn btn-primary btn-sm" title="Tambah hasil" href="<?php echo site_url('terpasang/form_detailTerpasang/');?>'+dataSubkon[i].msub_id+'/'+dataSubkon[i].ttpsh1_id+'" data-toggle="tooltip">'+
                      '<i class="fas fa-pencil-alt"></i>'+
                    '</a>'+
              '</td>'+
            '</tr>';
        }
        $('#dataManPower').html(html);
      }

      /*
      function addHasil(x) {
        var id = $(x).attr("data-id");
        alert('Belum bisa boss: '+id);

      }
      */

      $("#tabelLaporanHarian").delegate("tr", "click", function(){
        //var tabel = document.getElementById("tabelManPower");
        var row = jQuery(this).closest('tr');
        var id = row.find('td:eq(0) input#id').val();   // get ttpsh0_id on cell
        var tgl = row.find('td:eq(0)').text();   // get ttpsh0_tanggal on cell
        document.getElementById('tgl_laporan').valueAsDate = new Date(tgl);
        get_detailHarian(tgl);
      });

      /*
      $("#tabelManPower").delegate("tr", "click", function(){
        //alert('Ok boss');
        var url="<?php //echo site_url('terpasang/form_detailTerpasang/');?>"+document.getElementById('msub_id').value+"/"+document.getElementById('ttpsh1_id').value;
        window.location = url;
      });
      */

      function get_detailHarian(tgl) {
        //alert('ok');
        $.getJSON("<?php echo site_url('terpasang/get_detailMPHarian/');?>"+tgl, function(dataHarian) {
            //alert('ok');
            //alert(dataHarian);
            
            if (dataHarian !== 'empty') {
              fillTableManPower(dataHarian);
              $('.btn-simpan-manpower').attr("disabled", false);    
              //alert(dataHarian);
              
            } else {
              alert('No data');
              $('.btn-simpan-manpower').attr("disabled", true);
            }
            
          });
      }


    
        document.getElementById('tgl_laporan').valueAsDate = new Date();
        //document.getElementById('tanggal').asdate = tgl;
        $.getJSON("<?php echo site_url('home/get_mpro_id');?>", function(mpro_id) {
          showListLapHar(mpro_id, <?php echo $this->session->userdata('user_id')?>);
        });

        function changeProyek(x) {
            var id=$(x).val();
            //alert('sukses');
           
            $.ajax({
              url : "<?php echo site_url('home/set_mpro_id/');?>"+id,
              method : "POST",
              success: function(mpro_id){
                showListLapHar(mpro_id, <?php echo $this->session->userdata('user_id')?>);
                var tgl = document.getElementById('tgl_laporan').value;   // get ttpsh0_tanggal input
                //alert(tgl);
                get_detailHarian(tgl);
                //alert(mpro_id);
              }
            });
        }

        function showListLapHar(mpro_id, id) {
          $.getJSON("<?php echo site_url('terpasang/get_list_laphar/');?>"+mpro_id+"/"+id, function(data) {
            //alert(dataLapHar);
            //console.log(dataRap['rap'][1].norap);
            var html = '';
            var i;
            for (i=0; i<data.length; i++) {
              html += 
                '<tr>'+
                  '<td type="date">'+data[i].ttpsh0_tanggal+'<br>'+
                    '<input id="id" type="hidden" value= "'+data[i].ttpsh0_id+'">'+
                  '</td>'+
                  '<td style="text-align: right">'+data[i].ttpsh0_manpower+' org</td>'+
                  '<td style="text-align: right">'+data[i].mandays_value/1000+'k</td>'+
                  '<td style="text-align: right">'+data[i].progress/1000+'k</td>'+
                  '<td style="text-align: right">'+number_format(data[i].produktivitas,3,'.',',')+'</td>'+

                  
                  //'<td class="project_progress">'+
                    /*
                    '<div class="progress progress-sm">'+
                      '<div class="progress-bar bg-blue" role="progressbar" aria-volumenow="'+dataRap[i].mpro_rencana_bl+'" aria-volumemin="0" aria-volumemax="100" style="width: '+dataRap[i].mpro_rencana_bl+'%">'+
                                  'Rencana: '+dataRap[i].mpro_rencana_bl+'% '+
                      '</div>'+
                    '</div>'+
                    

                    
                    '<div class="progress progress-bg">'+
                      '<div class="progress-bar bg-red" role="progressbar" aria-volumenow="'+dataRap['rap'][i].mpro_rencana_bl+'" aria-volumemin="0" aria-volumemax="100" style="width: '+dataRap['rap'][i].mpro_rencana_bl+'%">'+
                                  'Aktual: '+dataRap['rap'][i].mpro_rencana_bl+'% '+
                      '</div>'+
                    '</div>'+
                    */
                  //'</td>'+
                  /*
                  '<td class="project-actions text-right">'+
                    '<a class="btn btn-info btn-sm" href="<?php echo site_url();?>terpasang/tpasang_head/'+data[i].ttpsh0_id+'"><i class="fas fa-pencil-alt"></i></a>'+
                  '</td>'+
                  */
                '<tr>';
            }
            $('#dataLapHar').html(html);
          });
        }

        function number_format(number, decimals, decPoint, thousandsSep){
          decimals = decimals || 0;
          number = parseFloat(number);

          if(!decPoint || !thousandsSep){
              decPoint = '.';
              thousandsSep = ',';
          }

          var roundedNumber = Math.round( Math.abs( number ) * ('1e' + decimals) ) + '';
          var numbersString = decimals ? roundedNumber.slice(0, decimals * -1) : roundedNumber;
          var decimalsString = decimals ? roundedNumber.slice(decimals * -1) : '';
          var formattedNumber = "";

          while(numbersString.length > 3){
              formattedNumber += thousandsSep + numbersString.slice(-3)
              numbersString = numbersString.slice(0,-3);
          }

          return (number < 0 ? '-' : '') + numbersString + formattedNumber + (decimalsString ? (decPoint + decimalsString) : '');
        }
    </script>

  <script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    var areaChartData = {
      labels  : ['01-11-19', '02-11-19', '03-11-19'],
      datasets: [
        {
          label               : 'Nilai Tenaga',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [5000, 6200, 5400]
        },
        {
          label               : 'Progress',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [250, 250, 0 ]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
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
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
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

    
  })
</script>