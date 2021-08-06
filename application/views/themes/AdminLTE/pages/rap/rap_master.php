    <!-- Main content -->
    <section class="content">
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
          <h3 id="card-title" class="card-title">MASTER RAP: Proyek <?php echo $this->session->userdata('mpro_namaproyek');?></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        
        <div class="card-body table-responsive p-2" style="height: 580px;">
            <div class="row">
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
              <div id="tombol" align="right" class="col-md-8">
                <!--<button class="btn btn-primary btn-simpan">Simpan</button>-->
                <a href="javascript:void(0)" class="btn btn-simpan btn-primary" title ="Simpan" data-toggle="tooltip">
                  <i class="glyphicon glyphicon-ok"></i>    Simpan
                </a>
              </div>

            </div>
          
          
          <table id="tabel_detail" width="100%" class="table table-responsive">
              <thead>
                  <tr>
                      <th class="th-sm" style="width: 5%">
                          #
                      </th>
                      <th style="width: 30%">
                          Diskripsi Material
                      </th>
                      <th style="width: 8%">
                          Satuan
                      </th>
                      <th style="width: 8%">
                          R0 [TD]
                      </th>
                      <th style="width: 8%">
                          Rx [SD]
                      </th>
                      <th style="width: 8%">
                          Harga Satuan Upah
                      </th>
                      <th style="width: 12%">
                          Upah R0 [TD]
                      </th>
                      <th style="width: 12%">
                          Upah Rx [SD]
                      </th>
                      
                      <th style="width: 50%">

                      </th>
                  </tr>
              </thead>
              <tbody id="dataMaster"></tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  
    


<script type="text/javascript">

  // Get Permission
  $.ajax({
    url : "<?php echo site_url('admin/get_user_permit');?>",
    method : "POST",
    success: function(userPermit){
      setPermittion(JSON.parse(userPermit).menus.QSUPAH);
      //setPermittion(JSON.parse(userPermit).prop.PROYEK);
      //console.log(JSON.parse(userPermit).prop.PROYEK.EDITRAP_SPV.create);
    }
  });

  function setPermittion(permit) {
    //console.log(permit);
    var editUpah = permit.MASTER_RAP.edit == 'no' ? true : false;
    $(".btn-simpan").attr("disabled", editUpah);
    if (editUpah == true) {
      document.getElementById('tombol').style.display="none"; 
    } else {document.getElementById('tombol').style.display="block";}
  }

  $(document).ready(function(){
    $('.btn-simpan').on("click", function() {
        //alert("ok");
        var tabel = document.getElementById("tabel_detail");
        var rowCount = tabel.rows.length-2;
        
        // jika detail tabel tidak kosong
        if (rowCount !== 0) {
          //alert(rowCount);
          // jika simpan dikonfirmasi OK
          if (confirm("Yakin data sudah benar ?") == true) {
            //alert('Data disimpan');
            //var totalitem   = document.getElementById("tabel_detail").rows.length-2;
            //alert("ok");
            simpan_detail();
          } else {
            alert('Data tidak disimpan !');
          }
        } else {
          alert("Detail kosong !");  
          //$('#searchStock').focus();
        }
      
    });

    function simpan_detail() {
      if (document.getElementById("tabel_detail").rows.length-2 !== 0) {
        //alert('Ok');
        //var headId = head_id.replace(/(\r\n|\n|\r)/gm, "");
        
        var tabel = document.getElementById("tabel_detail");
        var rowCount = tabel.rows.length-2;
        var TableData = new Array();
    
        //$('#tabel_detail > tbody > tr').each(function(row, tr){
        $('#dataMaster > tr').each(function(row, tr){  
            TableData[row]={
                //"tbudqsm_updateduserid"  : <?php //echo $this->session->userdata('user_id'); ?>,
                //document.getElementById("tanggal_keluar").value,
                "tbudqsm_id"    : $(tr).find('td:eq(0) input#tbudqsm_id').val(),
                //"tbudqsm_diskripsi_material"  : $(tr).find('td:eq(1)').text(),
                //"tbudqsm_satuan"  : $(tr).find('td:eq(2)').text(),
                "tbudqsm_unitpriceupah"  : $(tr).find('td:eq(5) input').val()
            }
        }); 
        //TableData.shift();  // first row is the table header - so remove

        var jsonRows = JSON.stringify(TableData);
        //alert(jsonRows);
        //console.log(jsonRows);

        // jika detail barang tidak kosong
        if (jsonRows) {
          //alert(jsonRows);
          // jika simpan dikonfirmasi OK
          //alert('Data disimpan');
          $.ajax({
            url : "<?php echo site_url('rap/edit_master_rap/');?>",
            //url : $(this).data('url'),
            method : "POST",
            data : {edit_data: jsonRows},
            success: function(data){
              //alert('Data berhasil disimpan ...');
              alert(data);
              //simpan_detail(data);
              //location.href = "<?php //echo site_url('rap/rap_master/');?><?php //echo $this->session->userdata('mpro_id'); ?>";
              var mpro_id = <?php echo $this->session->userdata('mpro_id');?>;
              showRapMaster(mpro_id);
            },
                
            error : function(request, status, error) {
              alert(error);
            } 
          });
        } else {
          alert("Detail barang kosong !");  
        }
      } else {
        alert("Detail barang kosong !");        
      }
    }
  });

      // isi data table pertama kali menu dibuka
      $.getJSON("<?php echo site_url('home/get_mpro_id');?>", function(mpro_id) {
        showRapMaster(mpro_id);
      });

      // jika pilihan Proyek berubah
      function changeProyek(x) {
        var id=$(x).val();
        //alert('sukses');
        $.ajax({
          url : "<?php echo site_url('home/set_mpro_id/');?>"+id,
          method : "POST",
          success: function(mpro_id){
            //document.getElementById("card-title").value = 'MASTER RAP: Proyek <?php //echo $this->session->userdata('mpro_namaproyek');?>';
            showRapMaster(mpro_id);
          }
        });
      }

        // tampilkan data tabel Master RAP
        function showRapMaster(mpro_id) {
          $.getJSON("<?php echo site_url('rap/get_rap_master/');?>"+mpro_id, function(dataRap) {
            //alert('sukses');
            //console.log(dataRap['rap_master'][1].tbudqsm_satuan);
            var html = '';
            var i;
            var x;
            var upah;
            for (i=0; i<dataRap['rap_master'].length; i++) {
              x = i+1;
              upah = number_format(dataRap['rap_master'][i].tbudqsm_unitpriceupah,0,'.',',');
              html += 
                
                '<tr>'+
                  '<td> <input type="hidden" name="tbudqsm_id" id="tbudqsm_id" value="'+
                  dataRap['rap_master'][i].tbudqsm_id+'"><input type="hidden" name="tbudqsm_mpro_id" id="tbudqsm_mpro_id" value="'+
                  dataRap['rap_master'][i].tbudqsm_mpro_id+'">'+x+'</td>'+

                  '<td>'+dataRap['rap_master'][i].tbudqsm_diskripsi_material+'</td>'+
                  '<td>'+dataRap['rap_master'][i].tbudqsm_satuan+'</td>'+
                  '<td style="text-align: right;">'+number_format(dataRap['rap_master'][i].tbudqsm_qtyrap_0,2,'.',',')+'</td>'+
                  '<td style="text-align: right;">'+number_format(dataRap['rap_master'][i].tbudqsm_qtyrap_valid,2,'.',',')+'</td>'+
                  '<td>'+
                    '<input style="text-align: right; width: 100px" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="calculator-input form-control-sm" type="text" value="'+upah+'">'+
                  '</td>'+

                  '<td style="text-align: right;">'+number_format(dataRap['rap_master'][i].total_upah_td,0,'.',',')+'</td>'+
                  '<td style="text-align: right;">'+number_format(dataRap['rap_master'][i].total_upah_sd,0,'.',',')+'</td>'+
                  
                  //'<td><input type="number" value="'+dataRap['rap_master'][i].tbudqsm_unitpricematerial+'"></td>'+
                  
                  
                  //'<td style="display:none">'+dataRap['rap_master'][i].tbudqsm_id+'</td>'+
                  //'<td>'+'</td>'+
                  //'<td>'+'</td>'+
                  /*
                  '<td class="project-actions text-right">'+
                    '<a class="btn btn-info btn-sm" href="<?php //echo site_url();?>rap/rap_detail/'+dataRap['rap_master'][i].tbudqsm_id+'"><i class="fas fa-pencil-alt"></i></a>'+
                  '</td>'+
                  */

                '</tr>';
            }
            $('#dataMaster').html(html);
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
