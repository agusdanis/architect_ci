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
          <h3 class="card-title" style="color: blue;"><b>PURCHASE ORDERS</b></h3>

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
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
          
        <div class="card-body table-responsive p-0" >
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
          
          <table  class="table table-responsive table-hover">
          <!--<table  class="table table-hover table-responsive p-2 table-head-fixed">-->
              <thead>
                  <tr>
                      <th style="width: 10%">
                          # KODEPO
                      </th>
                      <th style="width: 10%">
                          Tanggal PO/MOS
                      </th>
                      
                      <th style="width: 20%">
                          Supplier
                      </th>
                      <th style="width: 10%">
                          Total Nilai
                      </th>
                      <th style="width: 30%">
                          Catatan
                      </th>
                      <th style="width: 10%">

                      </th>
                  </tr>
              </thead>
              <tbody id="dataPO" class="dataPO"> 

              </tbody>
          </table>
        
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->

    <script type="text/javascript">
        $.getJSON("<?php echo site_url('home/get_mpro_id');?>", function(mpro_id) {
          showListPO(mpro_id);
        });

        function changeProyek(x) {
            var id=$(x).val();
            //alert('sukses');
           
            $.ajax({
              url : "<?php echo site_url('home/set_mpro_id/');?>"+id,
              method : "POST",
              success: function(mpro_id){
                showListPO(mpro_id);
              }
            });
        }

        function showListPO(mpro_id) {
          $.getJSON("<?php echo site_url('po/get_list_po/');?>"+mpro_id, function(dataPO) {
            console.log(dataPO['po'][1]);
            var html = '';
            var i;
            
            for (i=0; i<dataPO['po'].length; i++) {
              html += 
                '<tr>'+
                  '<td>'+dataPO['po'][i].kodepo+'</td>'+
                  '<td type="date">'+dataPO['po'][i].TPOH_TANGGAL+'<br>'+
                  dataPO['po'][i].TPOH_TANGGAL_MOS+'</td>'+
                  '<td>'+dataPO['po'][i].msup_namasupplier+'<br>'+
                  '<medium>'+dataPO['po'][i].msup_kontakperson+'<br>'+
                  dataPO['po'][i].msup_telp+' '+dataPO['po'][i].msup_fax+'<medium></td>'+
                  //'<td>'+dataPO['po'][i].total_po+'</td>'+
                  '<td style="text-align: right;">'+number_format(dataPO['po'][i].total_po,0,'.',',')+'</td>'+
                  /*
                  '<td class="project_progress">'+
                    
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
                  '</td>'+
                  */

                  //'<td>'+'</td>'+
                  '<td>'+dataPO['po'][i].tpoh_catatan+'</td>'+
                  '<td class="project-actions text-right">'+
                    '<a class="btn btn-info btn-sm" href="<?php echo site_url();?>po/po_detail/'+dataPO['po'][i].tpoh_id+'"><i class="fas fa-pencil-alt"></i></a>'+
                  '</td>'+
                '<tr>';
            }
            $('#dataPO').html(html);
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
      /*
      $(document).ready(function() {
          $(".clickable_row").click(function() {
              window.location = $(this).data("href");
          });
      });
      */
    </script>



    