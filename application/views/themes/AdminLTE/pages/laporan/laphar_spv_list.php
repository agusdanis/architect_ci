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

        <!-- column Kanan -->
      <div class="column col-md-8">
      <div class="card">
        <div class="card-header">
          <div class="card-title">
          
          <div class="input-group col-md-12">
              <input id="tgl_laporan" type="date" class="form-control">
              <div class="input-group-prepend">
                <!--<span class="input-group-text"><i class="btn-sm fas fa-plus"></i></span>-->
                <!--<button type="button" class="btn-sm"><i class="fas fa-plus"></i></button>-->
                <a class="btn btn-add-laporan btn-primary"><i class="fas fa-plus"></i></a>
              </div>
              
              
            </div>
          </div>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>

        <div class="card-body">
          

          <div class="row">
            
            <!--

            <div align="right" class="col-md-12">
              <button class="btn-sm btn-primary">Tambah</button>
            </div>
          -->
          </div>

          <table id="tabel_detail" width="100" class="table table-hover table-responsive p-2">
            <thead>
              <tr>
                <th style="width: 15%">
                  SUBKON
                </th>
                <th style="width: 10%">
                  TOTAL MAN POWER
                </th>
                <th style="width: 10%">
                  Hasil Kerja
                </th>
                <th style="width: 10%">
                  Aksi
                </th>
              </tr>
            </thead>
            <tbody id="dataLapHarHead" class="dataLapHarHead"> 
              

            </tbody>

          </table>
          <tfoot>
            <div align="left" class="col-md-12">
              <button class="btn-sm btn-primary">Simpan</button>
            </div>
          </tfoot>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
      </div> <!-- column Kiri -->

      <!-- column Kanan -->
      <div class="column col-md-4">
    

      <div class="card">
        <div class="card-header">
          <!--<button class="btn-sm btn-primary">Tambah</button>-->
          <h3 class="card-title">Aktivitas harian</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>

        <div class="card-body">
          <div class="row">
            <!--
            <div class="input-group col-md-2">
              
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
              </div>
              <input type="date" class="form-control" placeholder="Email">
            </div>
            

            <div align="right" class="col-md-6">
              <button class="btn-sm btn-primary">Tambah</button>
            </div>
            -->
          </div>

          <table class="table table-hover table-responsive">
            <thead>
              <tr>
                <th width="25%">
                  TANGGAL
                </th>
                <th width="15%">
                  TOTAL MAN POWER
                </th>
                <th width="15%">
                  Produktivitas
                </th>
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
      

      
    </div> 

    </section>
    <!-- /.content -->

    
  
  <script type="text/javascript">
  $(document).ready(function(){
    $('.btn-add-manpower').on("click", function() {
      //alert('Ok boss');
      var tabel = document.getElementById("tabel_manpower");
      var rowCount = tabel.rows.length-2;
      if (rowCount !== 0) {
        if (confirm("Yakin data sudah benar ?") == true) {
          simpan_detail();
        } else {
          alert('Data tidak disimpan !');
        }
      }
      /*
      $('#tabel_detail').find('tbody').append([
          '<tr>',
            //'<td> <input type="hidden" name="dtl_brgId" id="dtl_brgId" value="'+
            //document.getElementById("brg_id").value+
            //'"><input type="hidden" name="dtl_stockId" id="dtl_stockId" value="'+
            ///document.getElementById("stock_id").value+
            //'">'+
            //document.getElementById("searchStock").value+
            //'</td>',

            //'<td>'+document.getElementById("searchStock").value+'</td>',
            '<td>'+'SUBKON A'+'</td>',
            '<td>'+'20 org'+'</td>',
            '<td>'+'Lantai1'+'</td>',
            
            '<td> <a href="javascript:void(0)" title="Hapus barang" class="btn btn-sm btn-danger hapus_barang" data-toggle="tooltip" onclick="delRow(this)"><i class="glyphicon glyphicon glyphicon-remove"></i></a> </td>',
          '</tr>'
          ].join(''));
      */
    });

    function simpan_detail() {
      if (document.getElementById("tabel_manpower").rows.length-2 !== 0) {
        //alert('Ok boss');
        //var headId = head_id.replace(/(\r\n|\n|\r)/gm, "");
        
        var tabel = document.getElementById("tabel_manpower");
        var rowCount = tabel.rows.length-2;
        var TableData = new Array();
    
        //$('#tabel_detail > tbody > tr').each(function(row, tr){
        $('#dataManPower > tr').each(function(row, tr){  
            TableData[row]={
                //"tbudqsm_updateduserid"  : <?php //echo $this->session->userdata('user_id'); ?>,
                //document.getElementById("tanggal_keluar").value,
                "ttpsh1_msub_id"    : $(tr).find('td:eq(0) input#msub_id').val(),
                "ttpsh1_msub_nama_subkon"    : $(tr).find('td:eq(0)').text(),
                //"tbudqsm_diskripsi_material"  : $(tr).find('td:eq(1)').text(),
                "ttpsh1_tanggal"    : document.getElementById('tgl_laporan').valueAsDate,
                "ttpsh1_manpower"   : $(tr).find('td:eq(1) input').val()
            }
        });
        var jsonRows = JSON.stringify(TableData);
        console.log(jsonRows);

      }
    }

  });
  </script>

  
    
  <script type="text/javascript"> 
    $('.btn-add-laporan').click(function (e) {
      e.preventDefault();
      $('#modalAddLaporan').modal('show');
    });
  </script>
  

    <script type="text/javascript">
        document.getElementById('tgl_laporan').valueAsDate = new Date();
        //document.getElementById('tanggal').asdate = tgl;
        $.getJSON("<?php echo site_url('home/get_mpro_id');?>", function(mpro_id) {
          showListLapHar(mpro_id, <?php echo $this->session->userdata('user_id')?>);
        });

        function changeProyek(x) {
            var id=$(x).val();
            ///alert('sukses');
           
            $.ajax({
              url : "<?php echo site_url('home/set_mpro_id/');?>"+id,
              method : "POST",
              success: function(mpro_id){
                showListLapHar(mpro_id, <?php echo $this->session->userdata('user_id')?>);
                //alert(mpro_id);
              }
            });
        }

        function showListLapHar(mpro_id, id) {
          //alert(mpro_id+' '+id);
          //var id = <?php echo $this->session->userdata('user_id')?>;
          $.getJSON("<?php echo site_url('terpasang/get_list_laphar/');?>"+mpro_id+"/"+id, function(data) {
            //alert(dataLapHar);
            //console.log(dataRap['rap'][1].norap);
            var html = '';
            var i;
            
            /*
            if (dataRap['spv'].length > 0) {
              var supervisor = data['spv'];
            } else {
              var supervisor = [];
            }*/
            for (i=0; i<data.length; i++) {
              html += 
                '<tr>'+
                  '<td>'+data[i].ttpsh0_tanggal+'</td>'+
                  '<td style="text-align: right">'+data[i].ttpsh0_manpower+' org</td>'+
                  '<td>'+'</td>'+
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

      
    </script>