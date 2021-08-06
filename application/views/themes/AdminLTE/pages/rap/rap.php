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
            <h1>RAP MATERIAL</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">RAP</li>
            </ol>
          </div>
        </div>
        
        <!--
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
        -->

      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section id="listRap" class="content">
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

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <!--<h3 class="card-title" style="color: blue;"><b>RENCANA ANGGARAN PROYEK</b></h3>-->

          <div class="card-tools">
            <!--
            <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
            -->
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <!--
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
            -->
          </div>
          
        <div class="card-body table-responsive p-0" >
          <?php if (count($proyek) > 1) { ?>
          <div class="col-md-4">
            <!--<select class="form-control select2bs4" style="width: 100%;" id="pilihProyek" name="pilihProyek">-->
            <select class="form-control select2bs4" style="width: 100%;" onchange="changeProyek(this)">
              <!--<option value="" selected>-- Pilih Proyek --</option>-->
              <?php foreach($proyek as $row_proyek) { ?>
                <option value="<?php echo $row_proyek->mpro_id; ?>" <?php if ($row_proyek->mpro_id == $this->session->userdata('mpro_id')) { echo "selected"; }?>>
                  <?php echo $row_proyek->mpro_kodeproyek." ".$row_proyek->mpro_namaproyek; ?></option> ;
              <?php } ?>
            </select>
          </div>
          <?php } ?>
          <table  id="tabelRAP" class="table table-responsive table-hover">
          <!--<table  class="table table-hover table-responsive p-2 table-head-fixed">-->
              <thead>
                  
                  <tr>
                      <th style="width: 12%">
                          # RAP
                      </th>
                      <th style="width: 15%">
                          Pekerjaan<br/>
                          # Gambar
                      </th>
                      <!--<th style="width: 15%">
                          Pekerjaan
                      </th>-->
                      <th style="width: 10%">
                          Lantai/Area
                      </th>
                      <th style="width: 15%; font-size: 12px">
                          RAP Upah<br/>
                          Progress Upah
                      </th>
                      <th style="width: 10%">
                          Schedule<br/>
                          Selesai
                      </th>
                      <th style="width: 15%">
                          Progress
                      </th>

                      <!--<th style="width: 10%" class="text-center">
                          Status
                      </th>-->
                      <th style="width: 15%">
                          Supervisor & Pelaksana
                      </th>
                      <th style="width: 30%">

                      </th>
                  </tr>
              </thead>
              <tbody id="dataRap" class="dataRap"> 

              </tbody>
          </table>
        
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->

    <script type="text/javascript">
      $(document).ready(function() {
        
        $("#cariSesuatu").keyup(function(){
          var searchText = $(this).val().toLowerCase();
          // Show only matching TR, hide rest of them
          $.each($("#tabelRAP tbody tr"), function() {
            if($(this).text().toLowerCase().indexOf(searchText) === -1)
              $(this).hide();
            else
              $(this).show();                
          });
        });

      });
    </script>

    <script type="text/javascript">
        
        
        $("#tabelRAP").delegate("tr", "click", function(){
          var row   = jQuery(this).closest('tr');
          var id    = row.find('td:eq(0) input#rapid').val();   // get ttpsh0_id on cell
          var revno = row.find('td:eq(0) input#revno').val();
          var url="<?php echo site_url('rap/rap_detail/');?>"+id+"/"+revno;
          window.location = url;
        });
        
        

        $.getJSON("<?php echo site_url('home/get_mpro_id');?>", function(mpro_id) {
          showListRap(mpro_id);
        });

        function changeProyek(x) {
            var id=$(x).val();
            //alert('sukses');
           
            $.ajax({
              url : "<?php echo site_url('home/set_mpro_id/');?>"+id,
              method : "POST",
              success: function(mpro_id){
                showListRap(mpro_id);
              }
            });
        }

        function showListRap(mpro_id) {
          $.getJSON("<?php echo site_url('rap/get_list_rap/');?>"+mpro_id, function(dataRap) {
            //console.log(dataRap['rap'][1].norap);
            var html = '';
            var i;
            if (dataRap['spv'].length > 0) {
              var supervisor = dataRap['spv'];
            } else {
              var supervisor = [];
            }
            
            for (i=0; i<dataRap['rap'].length; i++) {
              var progress_upah = number_format(dataRap['rap'][i].total_prog_qty * 100,2,'.',',');
              //var progress_upah = dataRap['rap'][i].total_upah_valid == 0 ? 0 : number_format((dataRap['rap'][i].total_prog / dataRap['rap'][i].total_upah_valid) * 100,2,'.',',');
              //var progress_pasang = dataRap['rap'][i].total_upah_valid == 0 ? 0 : number_format((dataRap['rap'][i].material_value / dataRap['rap'][i].total_upah_valid) * 100,2,'.',',');
              //var progress_bpb = number_format(dataRap['rap'][i].prosenbpb * 100,2,'.',','); 
              var progress_pasang = number_format(dataRap['rap'][i].prosenqtypasang,2,'.',','); 
              var progress_bpb = number_format(dataRap['rap'][i].prosenqtybpb,2,'.',','); 
              var y; var z;
              html += 
                
                '<tr>'+
                  '<td>'+dataRap['rap'][i].norap+'<br>'+
                  '<input type="hidden" id="rapid" value="'+dataRap['rap'][i].tbudqsh0_id+'">'+'<input type="hidden" id="revno" value="'+dataRap['rap'][i].tbudqsh0_rev_no+'">'+
                  '</td>'+
                  
                  '<td>'+dataRap['rap'][i].tbudqsh0_pekerjaan+'<br/>'+
                  '<small>'+dataRap['rap'][i].tbudqsh0_sub_pekerjaan+'</small><br/>'+
                  dataRap['rap'][i].tbudqsh0_nogambar+'</td>'+
                  '<td>'+dataRap['rap'][i].tbudqsh0_lantai+'<br/>'+
                  '<small>'+dataRap['rap'][i].tbudqsh0_kodeunit+'</small></td>'+
                  '<td style="text-align: right">'+number_format(dataRap['rap'][i].total_upah_valid,0,'.',',')+'<br/>'+
                  '<small>'+number_format(dataRap['rap'][i].total_prog,0,'.',',')+'</small></td>'+
                  '<td>'+dataRap['rap'][i].tbudqsh0_schinstall+'</td>'+
                  //'<td style="text-align: right">'+number_format(progress_upah,2,'.',',')+'<a></td>'+
                  '<td class="project_progress">'+
                    '<div class="progress progress-bg">'+
                      '<div class="progress-bar bg-green" role="progressbar" aria-volumenow="'+progress_bpb+'" aria-volumemin="0" aria-volumemax="100" style="width: '+progress_bpb+'%">'+
                                  'BPB: '+progress_bpb+'% '+
                      '</div>'+
                    '</div>'+
                    '<div class="progress progress">'+
                      '<div class="progress-bar bg-blue" role="progressbar" aria-volumenow="'+progress_pasang+'" aria-volumemin="0" aria-volumemax="100" style="width: '+progress_pasang+'%">'+
                                  'Material: '+progress_pasang+'% '+
                      '</div>'+
                    '</div>'+
                    '<div class="progress progress-bg">'+
                      '<div class="progress-bar bg-red" role="progressbar" aria-volumenow="'+progress_upah+'" aria-volumemin="0" aria-volumemax="100" style="width: '+progress_upah+'%">'+
                                  'Progress: '+progress_upah+'% '+
                      '</div>'+
                    '</div>'+
                  '</td>'+
                  //'<td>'+'</td>'+
                  '<td>'+
                    '<div class="row">'+
                      
                      /*
                      '<select class="col-md-12 select2">'+
                          '<option value="'+dataRap['rap'][i].tbudqsh0_spvid+'">'+
                            dataRap['rap'][i].tbudqsh0_namasupervisor+
                          '</option>'+
                          
                      '</select>'+
                      */  
      
                      dataRap['rap'][i].tbudqsh0_namasupervisor+

                      '<br>'+
                      /*
                      '<select class="col-md-12 select2bs4">'+
                          '<option value="'+dataRap['rap'][i].tbudqsh0_subkonid+'">'+
                            dataRap['rap'][i].tbudqsh0_namasubkon+
                          '</option>'+
                          //for (y=0; y<dataRap['subkon'].length; y++) {
                          //  '<option>'+dataRap['subkon'][y].tbudqsh0_namasubkon+'</option>'+
                          //}+
                      '</select>'+ 
                      */

                      dataRap['rap'][i].tbudqsh0_namasubkon+
                    '</div>'+
                  '</td>'+
                  /*
                  '<td class="project-actions text-right">'+
                    '<a class="btn btn-info btn-sm" href="<?php //echo site_url();?>rap/rap_detail/'+dataRap['rap'][i].tbudqsh0_id+'/'+dataRap['rap'][i].tbudqsh0_rev_no+'"><i class="fas fa-pencil-alt"></i></a>'+
                  '</td>'+
                  */
                '<tr>';
            }
            $('#dataRap').html(html);
          });
        }

      
    </script>

    



    