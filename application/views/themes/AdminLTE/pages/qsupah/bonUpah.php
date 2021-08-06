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
            <h1>PEMBAYARAN UPAH</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">BON UPAH</li>
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
          <div class="row">
          <?php if (count($proyek) > 1) { ?>
          <div class="form-group col-md-4">
            <!--<label>Proyek:</label>-->
            <div class="input-group">
            <!--<select class="form-control select2bs4" style="width: 100%;" id="pilihProyek" name="pilihProyek">-->
            <select class="form-control select2bs4" style="width: 100%;" onchange="changeProyek(this)">
              <!--<option value="" selected>-- Pilih Proyek --</option>-->
              <?php foreach($proyek as $row_proyek) { ?>
                <option value="<?php echo $row_proyek->mpro_id; ?>" <?php if ($row_proyek->mpro_id == $this->session->userdata('mpro_id')) { echo "selected"; }?>>
                  <?php echo $row_proyek->mpro_kodeproyek." ".$row_proyek->mpro_namaproyek; ?></option> ;
              <?php } ?>
            </select>
          </div>
          </div>
          <?php } ?>

          <div class="form-group col-md-3">
            <!--<label>Periode Tanggal:</label>-->

              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="far fa-calendar-alt"></i>
                  </span>
                </div>
                <input onchange="changeTanggal(this)" type="text" class="form-control float-right" id="rangetanggal">
              </div>
              <!-- /.input group -->
            </div>
            <!-- /.form group -->
          </div>

          <table  id="tabelData" class="table table-responsive table-hover">
          <!--<table  class="table table-hover table-responsive p-2 table-head-fixed">-->
              <thead>
                  
                  <tr>
                      <th style="width: 5%">#</th>
                      <th style="width: 12%">Tanggal</th>
                      <th style="width: 15%">Subkon</th>
                      <th style="width: 8%">Pekerjaan</th>
                      <th style="width: 10%">Total SPK</th>
                      <th style="width: 10%">Total Bayar</th>
                      <th style="width: 10%">Bon Saat Ini</th>
                      <th style="width: 5%;">Mandays</th>
                      <th style="width: 30%">Keterangan</th>
                      <th style="width: 20%"> </th>
                  </tr>
              </thead>
              <tbody id="dataContent"> 

              </tbody>
          </table>
        
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->

    <script type="text/javascript">
        
        /*
        $("#tabelBonUpah").delegate("tr", "click", function(){
          var row   = jQuery(this).closest('tr');
          var id    = row.find('td:eq(0) input#rapid').val();   // get ttpsh0_id on cell
          var revno = row.find('td:eq(0) input#revno').val();
          var url="<?php //echo site_url('rap/rap_detail/');?>"+id+"/"+revno;
          window.location = url;
        });
        */
        
        /*
        $("#tanggal").on("change", function(){
          alert("Ok boss");
        });
        */

        /*
        $('#tanggal').daterangepicker().change(function() {
          alert("Ok boss");
        })
        */

        $.getJSON("<?php echo site_url('home/get_mpro_id');?>", function(mpro_id) {
          showListBonUpah(mpro_id);
        });

        
        function changeTanggal(x) {
          var tglMulai = startDate.format('YYYY-MM-DD');
          var tglAkhir = endDate.format('YYYY-MM-DD');
          //alert(tglMulai+' '+tglAkhir);
          console.log('Change tanggal: '+tglMulai+' - '+tglAkhir);
          //alert("Ok boss");
          showListBonUpah(tglMulai, tglAkhir);
        }
        


        function changeProyek(x) {
            var id=$(x).val();
            var rangetanggal = $('#rangetanggal').val();
            var splittanggal = rangetanggal.split(" - ");
            var tglM = new Date( splittanggal[0].replace( /(\d{2})-(\d{2})-(\d{4})/, "$2/$1/$3") );
            var tglA = new Date( splittanggal[1].replace( /(\d{2})-(\d{2})-(\d{4})/, "$2/$1/$3") );
            //var tglMulai = splittanggal[0];
            //var tglAkhir = splittanggal[1];
            //var tanggal = moment($('#rangetanggal').data('daterangepicker').startDate).toDate();
            //var tglAkhir = .endDate.format('YYYY-MM-DD');
            var dM = tglM.getDate();
            var mM = tglM.getMonth(); mM += 1;
            var yM = tglM.getFullYear();
            var tglMulai = yM+'-'+mM+'-'+dM;
            var dA = tglA.getDate();
            var mA = tglA.getMonth();  mA += 1;
            var yA = tglA.getFullYear();
            var tglAkhir = yA+'-'+mA+'-'+dA;
            console.log('Change proyek: '+tglMulai+' - '+tglAkhir);
           
            $.ajax({
              url : "<?php echo site_url('home/set_mpro_id/');?>"+id,
              method : "POST",
              success: function(mpro_id){
                showListBonUpah(tglMulai, tglAkhir);
              }
            });
        }

        function showListBonUpah(tglMulai, tglAkhir) {
          $.getJSON("<?php echo site_url('Qsupah/get_listBonUpah/');?>"+tglMulai+'/'+tglAkhir, function(data) {
            //console.log(tglMulai+'-'+tglAkhir);
            //console.log(data);
            var html = '';
            var i; var no = 0;
            for (i=0; i<data['bonupah'].length; i++) {
              no += 1;
              html += 
                
                '<tr>'+
                  '<td>'+no+'</td>'+
                  '<td style="text-align: center;">'+data['bonupah'][i].tbu_tanggal+
                  '<input type="hidden" id="tbu_id" value="'+data['bonupah'][i].tbu_id+'">'+
                  '</td>'+
                  '<td>'+data['bonupah'][i].mpbr_namapemborong+'</td>'+
                  '<td>'+data['bonupah'][i].mpsub_pekerjaan+'</td>'+
                  '<td style="text-align: right;">'+number_format(data['bonupah'][i].tspko_totalkontrak,0)+'</td>'+
                  '<td style="text-align: right;">'+number_format(data['bonupah'][i].tspko_totalambil,0)+'</td>'+
                  '<td style="text-align: right;">'+number_format(data['bonupah'][i].tbu_nilaiambil,0)+'</td>'+
                  '<td style="text-align: right;">'+data['bonupah'][i].tbu_mandays+'</td>'+
                  '<td>'+data['bonupah'][i].tbu_keterangan+'</td>'+
                  
                  '<td class="project-actions text-right">'+
                    '<btn class="btn btn-success btn-sm" href="#""><i class="fas fa-plus-circle"></i></btn>'+
                    '<btn class="btn btn-info btn-sm" href="#""><i class="fas fa-pencil-alt"></i></btn>'+
                  '</td>'+
                  
                '</tr>';
            }
            $('#dataContent').html(html);
          });
        }

      
    </script>

    <script type="text/javascript">
      $(document).ready(function() {
        $("#cariSesuatu").keyup(function(){
          var searchText = $(this).val().toLowerCase();
          // Show only matching TR, hide rest of them
          $.each($("#tabelData tbody tr"), function() {
            if($(this).text().toLowerCase().indexOf(searchText) === -1)
              $(this).hide();
            else
              $(this).show();                
          });
        });
      });
    </script>
    



    