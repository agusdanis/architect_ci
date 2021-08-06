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
            <h1>DETAIL LAPORAN TERPASANG</h1>
            <!--<h1><?php //echo $header['ttpsh1_id'];?></h1>-->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo site_url('terpasang/show/');?>/<?php echo $this->session->userdata('mpro_id'); ?>">Laporan terpasang</a></li>
              <li class="breadcrumb-item active">Detail</li>
            </ol>
          </div>
        </div>
    </section>


    <!-- Main content -->
    <section class="content">
      
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          
          <h3 id="judulLaporan" class="card-title">Detail Terpasang Subkon: <?php //echo $header['ttpsh1_id'];?></h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <!--<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>-->
          </div>
        </div>
        
        <div class="card-body ">
          <div class="card card-primary card-outline">
            <div class="card-header">
             
              <div class="row">
                
                <div class="input-group col-md-2">
                  <input id="tgl_laporan" type="date" value="<?php echo $header[0]->ttpsh1_tanggal; ?>" class="form-control">
                </div>
                
                
                <div class="input-group col-md-2">
                  <!--<label>ttpsh_ttpsh1_id</label>-->
                  <input type="hidden" id="pasangHeaderId" class="form-control" disabled>
                </div>
                <div class="input-group col-md-2">
                  <!--<label>ttpsh_id</label>-->
                  <input type="hidden" id="pasangHeadId" class="form-control" disabled>
                </div>
                
              </div>
             

              <div class="row">
                <div class="form-group col-md-2">
                  <small><b>#RAP</b></small><br>
                  <!--
                  <div class="input-group">
                    <input type="text" id="edNoRap" class="form-control">
                  </div>
                  -->
                  <select id="pilihRAP" class="form-control select2bs4" style="width: 100%;" onchange="changeRAP(this)">
                    <!--<option value="0" selected>-- Pilih RAP --</option>-->
                    <?php foreach($rap as $row) { ?>
                      <option value="<?php echo $row->tbudqsh0_id; ?>">
                        <?php echo $row->TBUDQSH0_NORAP.' - '.$row->TBUDQSH0_PEKERJAAN.' - '.$row->TBUDQSH0_LANTAI; ?></option> ;
                    <?php } ?>
                  </select>
                  <input type="hidden" id="tbudqsh0_mpro_id" class="form-control">
                  <input type="hidden" id="tbudqsh0_id" class="form-control">
                  <input type="hidden" id="tbudqsh0_spvid" class="form-control">
                  <input type="hidden" id="tbudqsh0_subkonid" class="form-control">
                  <input type="hidden" id="tbudqsh0_spk_id" class="form-control">
                  <input type="hidden" id="tbudqsh0_rev_no" class="form-control">
                </div>
                <div class="form-group col-md-3">
                  <small><b>PEKERJAAN</b></small><br>
                  <div class="input-group">
                    <input type="text" id="edPekerjaan" class="form-control">
                    <input type="text" id="edSubPekerjaan" class="form-control">
                  </div>
                </div>
                <div class="form-group col-md-2">
                  <small><b>#GAMBAR</b></small><br>
                  <div class="input-group">
                    <input type="text" id="edGambar" class="form-control">
                  </div>
                </div>
                <div class="form-group  col-md-3">
                  <small><b>GEDUNG/LANTAI/UNIT</b></small><br>
                  <div class="input-group">
                    <input type="text" id="edLokasi" class="form-control">
                    <!--
                    <input type="text" id="edLantai" class="form-control">
                    <input type="text" id="edKodeUnit" class="form-control">
                    -->
                  </div>
                </div>
                <div class="form-group col-md-2">
                  <small><b>JENIS KONTRAK</b></small><br>
                  <div class="input-group">
                    <input type="text" id="edJenisKontrak" class="form-control">
                  </div>
                </div>
                <div class="form-group col-md-2">
                  <small><b>SUPERVISOR</b></small><br>
                  <div class="input-group">
                    <input type="text" id="edSupervisor" class="form-control">
                  </div>
                </div>
                <div class="form-group col-md-2">
                  <small><b>PELAKSANA</b></small><br>
                  <div class="input-group">
                    <input type="text" id="edSubkon" class="form-control">
                  </div>
                </div>
                <div class="form-group col-md-2">
                  <small><b>SPK</b></small><br>
                  <div class="input-group">
                    <input type="text" id="edSPK" class="form-control">
                  </div>
                </div>
                <div class="form-group col-md-2">
                  <small> </small><br>
                  <button class="btn btn-simpan btn-primary" onclick="simpan(this)" disabled>Simpan</button>
                </div>
              </div>
          </div>
          </div>
          <!--<font size="3" >-->
          <table width = "100%" id="tabelTerpasang" class="table table-sm table-hover table-responsive tabelTerpasang">
              <thead>
                  <tr>
                      <th style="width: 5%">#</th>
                      <th style="width: 25%">Diskripsi Material</th>
                      <th style="width: 5%">Sat</th>
                      <th style="width: 8%">RAP</th>
                      <th style="width: 8%">BPB</th>
                      <th style="width: 10%; text-align: center">Prep<br/>10%</th>
                      <th style="width: 10%; text-align: center">Set<br/>45%</th>
                      <th style="width: 10%; text-align: center">Fix<br/>75%</th>
                      <th style="width: 10%; text-align: center">Test<br/>90%</th>
                      <th style="width: 10%; text-align: center">ST<br/>100%</th>
                      <!--<th style="width: 15%">Catatan</th>-->
                      <th style="width: 5%"></th>
                  </tr>
              </thead>
              <tbody id="dataRAPDetail">
              </tbody>
          </table>
          <!--</font>-->
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->


  <script type="text/javascript"> 
    $(document).ready(function() {
      // first time display page, show detail data
      var id=document.getElementById('pilihRAP').value;
      var tgl=document.getElementById('tgl_laporan').value;
      //alert(id+' / '+tgl);
      
      if ((id) && (id != 0)) {
        $.getJSON("<?php echo site_url('terpasang/get_RAPDetail/');?>"+id+"/"+tgl, function(data) {
            //alert(id+' / '+tgl);
            showdataRAPDetail(data);
          });
      }
    });

    

    // masih berlanjut

    function qtyprog1(x) {  // it's work
      $('.btn-simpan').attr("disabled", false);
    }

    function qtyprog2(x) {  // it's work
      var val = $(x).val();
      var row = $(x).closest('tr');
      var rowIndex = $(x).closest('tr').index();
      
      var prog1     = row.find('td:eq(5) input#qtyProg1').val();
      var oldprog1 = row.find('td:eq(5) input#oldqtyProg1').val();
      var oldprog2 = row.find('td:eq(6) input#oldqtyProg2').val();

      var newprog1 = (parseInt(val)+parseInt(oldprog2) - parseInt(oldprog1));
      if (newprog1 > parseInt(prog1)) { row.find('td:eq(5) input#qtyProg1').val(newprog1); }
      $('.btn-simpan').attr("disabled", false);
    }

    function qtyprog3(x) {  // it's work
      var val       = $(x).val();
      var row       = $(x).closest('tr');
      var rowIndex  = $(x).closest('tr').index();
      
      var prog1     = row.find('td:eq(5) input#qtyProg1').val() == '' ? 0 : row.find('td:eq(5) input#qtyProg1').val();;
      var oldprog1  = row.find('td:eq(5) input#oldqtyProg1').val();
      var prog2     = row.find('td:eq(6) input#qtyProg2').val() == '' ? 0 : row.find('td:eq(6) input#qtyProg2').val();
      var oldprog2  = row.find('td:eq(6) input#oldqtyProg2').val() == '' ? 0 : row.find('td:eq(6) input#oldqtyProg2').val();
      var oldprog3  = row.find('td:eq(7) input#oldqtyProg3').val() == '' ? 0 : row.find('td:eq(7) input#oldqtyProg3').val();
      
      var newprog2  = (parseInt(val)+parseInt(oldprog3) - parseInt(oldprog2));
      if (newprog2 > parseInt(prog2)) { row.find('td:eq(6) input#qtyProg2').val(newprog2); }

      var newprog1  = (newprog2+parseInt(oldprog2) - parseInt(oldprog1));
      if (newprog1 > parseInt(prog1)) { row.find('td:eq(5) input#qtyProg1').val(newprog1); }
      $('.btn-simpan').attr("disabled", false);
    }


    function qtyprog4(x) {  // it's work
      var val = $(x).val();
      var row = $(x).closest('tr');
      var rowIndex = $(x).closest('tr').index();
      
      var prog1     = row.find('td:eq(5) input#qtyProg1').val() == '' ? 0 : row.find('td:eq(5) input#qtyProg1').val();;
      var oldprog1  = row.find('td:eq(5) input#oldqtyProg1').val();
      var prog2     = row.find('td:eq(6) input#qtyProg2').val() == '' ? 0 : row.find('td:eq(6) input#qtyProg2').val();
      var oldprog2  = row.find('td:eq(6) input#oldqtyProg2').val() == '' ? 0 : row.find('td:eq(6) input#oldqtyProg2').val();
      var prog3     = row.find('td:eq(7) input#qtyProg3').val() == '' ? 0 : row.find('td:eq(7) input#qtyProg3').val();
      var oldprog3  = row.find('td:eq(7) input#oldqtyProg3').val() == '' ? 0 : row.find('td:eq(7) input#oldqtyProg3').val();
      var oldprog4 = row.find('td:eq(8) input#oldqtyProg4').val() == '' ? 0 : row.find('td:eq(8) input#oldqtyProg4').val();

      var newprog3  = (parseInt(val)+parseInt(oldprog4) - parseInt(oldprog3));
      if (newprog3 > parseInt(prog3)) { row.find('td:eq(7) input#qtyProg3').val(newprog3); }

      var newprog2  = (newprog3+parseInt(oldprog3) - parseInt(oldprog2));
      if (newprog2 > parseInt(prog2)) { row.find('td:eq(6) input#qtyProg2').val(newprog2); }

      var newprog1  = (newprog2+parseInt(oldprog2) - parseInt(oldprog1));
      if (newprog1 > parseInt(prog1)) { row.find('td:eq(5) input#qtyProg1').val(newprog1); }
      $('.btn-simpan').attr("disabled", false);
    }

    function qtyprog5(x) {  // it's work
      var val = $(x).val();
      var row = $(x).closest('tr');
      var rowIndex = $(x).closest('tr').index();

      var prog1     = row.find('td:eq(5) input#qtyProg1').val() == '' ? 0 : row.find('td:eq(5) input#qtyProg1').val();;
      var oldprog1  = row.find('td:eq(5) input#oldqtyProg1').val();
      var prog2     = row.find('td:eq(6) input#qtyProg2').val() == '' ? 0 : row.find('td:eq(6) input#qtyProg2').val();
      var oldprog2  = row.find('td:eq(6) input#oldqtyProg2').val() == '' ? 0 : row.find('td:eq(6) input#oldqtyProg2').val();
      var prog3     = row.find('td:eq(7) input#qtyProg3').val() == '' ? 0 : row.find('td:eq(7) input#qtyProg3').val();
      var oldprog3  = row.find('td:eq(7) input#oldqtyProg3').val() == '' ? 0 : row.find('td:eq(7) input#oldqtyProg3').val();
      var prog4     = row.find('td:eq(8) input#qtyProg4').val() == '' ? 0 : row.find('td:eq(8) input#qtyProg4').val();
      var oldprog4 = row.find('td:eq(8) input#oldqtyProg4').val() == '' ? 0 : row.find('td:eq(8) input#oldqtyProg4').val();
      var oldprog5 = row.find('td:eq(9) input#oldqtyProg5').val() == '' ? 0 : row.find('td:eq(9) input#oldqtyProg5').val();

      var newprog4  = (parseInt(val)+parseInt(oldprog5) - parseInt(oldprog4));
      if (newprog4 > parseInt(prog4)) { row.find('td:eq(8) input#qtyProg4').val(newprog4); }

      var newprog3  = (newprog4+parseInt(oldprog4) - parseInt(oldprog3));
      if (newprog3 > parseInt(prog3)) { row.find('td:eq(7) input#qtyProg3').val(newprog3); }

      var newprog2  = (newprog3+parseInt(oldprog3) - parseInt(oldprog2));
      if (newprog2 > parseInt(prog2)) { row.find('td:eq(6) input#qtyProg2').val(newprog2); }

      var newprog1  = (newprog2+parseInt(oldprog2) - parseInt(oldprog1));
      if (newprog1 > parseInt(prog1)) { row.find('td:eq(5) input#qtyProg1').val(newprog1); }
      $('.btn-simpan').attr("disabled", false);

    }
    
    $('#tgl_laporan').on("change", function() {  // id tgl_laporan change
      var tgl = $(this).val();
      var id=document.getElementById('pilihRAP').value;
      if (id != 0) {
        $.getJSON("<?php echo site_url('terpasang/get_RAPDetail/');?>"+id+"/"+tgl, function(data) {
          //alert(data.terpasang_header[0].ttpsh_ttpsh1_id);
          showdataRAPDetail(data);
        });
      }
      $('.btn-simpan').attr("disabled", true);
    });



    
    function simpan(x) {
      $('.btn-simpan').attr("disabled", true);
      var headerData = collectHeaderData();
      //var detailData = collectDetailData();
      //alert(headerData);
      
        if (confirm("Yakin data sudah benar ?") == true) {
          var dataPasang  = { headerData };
          var jsonData    = JSON.stringify(dataPasang)
          //console.log(jsonData);
          //alert('Ok');
          if (jsonData) {
            $.ajax({
              url : "<?php echo site_url('terpasang/simpanHeaderTerpasang/');?>",
              method : "POST",
              data : {dataHeader: headerData},
              success: function(headerId){
                //alert(headerId);
                //console.log(headerId);
                
                var detailData = collectDetailData(headerId);
                //console.log(detailData);
                $.ajax({
                  url : "<?php echo site_url('terpasang/simpanDetailTerpasang/');?>",
                  method : "POST",
                  data : {dataDetail: detailData},
                  success: function(data){
                    console.log(data);
                    //alert(data);
                  },
                  error : function(request, status, error) {
                    alert(error);
                  }
                }); 
                
              },
              error : function(request, status, error) {
                alert(error);
              } 
            });
          }
          
        } 
      
    }


    function collectHeaderData() {
      var header = new Array();
      header[0] = {
          'ttpsh_mpro_id'     : document.getElementById('tbudqsh0_mpro_id').value,
          'ttpsh_tbudqsh0_id' : document.getElementById('tbudqsh0_id').value,
          'ttpsh_spvid'       : document.getElementById('tbudqsh0_spvid').value,
          'ttpsh_subkonid'    : document.getElementById('tbudqsh0_subkonid').value,
          'ttpsh_rev_no'      : document.getElementById('tbudqsh0_rev_no').value,
          'ttpsh_ttpsh1_id'   : <?php echo $header[0]->ttpsh1_id;?>,
          'ttpsh_id'          : document.getElementById('pasangHeadId').value,
          'ttpsh_tanggal'     : document.getElementById('tgl_laporan').value
      };
      var jsonHeader = JSON.stringify(header);
      return jsonHeader;
    }

    
    function collectDetailData(headerId) {
      var TableData = new Array();
      var counter   = 0;
      var head = JSON.parse(headerId);
      $('#dataRAPDetail > tr').each(function(row, tr){  
            
            var qtyprog1 = $(tr).find('td:eq(5) input#qtyProg1').val() == '' ? 0 : $(tr).find('td:eq(5) input#qtyProg1').val();
            var qtyprog2 = $(tr).find('td:eq(6) input#qtyProg2').val() == '' ? 0 : $(tr).find('td:eq(6) input#qtyProg2').val();
            var qtyprog3 = $(tr).find('td:eq(7) input#qtyProg3').val() == '' ? 0 : $(tr).find('td:eq(7) input#qtyProg3').val();
            var qtyprog4 = $(tr).find('td:eq(8) input#qtyProg4').val() == '' ? 0 : $(tr).find('td:eq(8) input#qtyProg4').val();
            var qtyprog5 = $(tr).find('td:eq(9) input#qtyProg5').val() == '' ? 0 : $(tr).find('td:eq(9) input#qtyProg5').val();
            
            if ((parseInt(qtyprog1) > 0) || (parseInt(qtyprog2) > 0) || (parseInt(qtyprog3) > 0) || (parseInt(qtyprog4) > 0) || (parseInt(qtyprog5) > 0)) {
            
              TableData[row] = {
                  
                  "ttpsd_ttpsh_id"    : head.ttpsh_id,
                  "ttpsd_ttpsh1_id"   : head.ttpsh1_id, //"<?php echo $header[0]->ttpsh1_id;?>",
                  "ttpsd_msub_id"     : head.msub_id,
                  "ttpsd_spv_id"      : head.spv_id,
                  "ttpsd_tanggal"     : head.tanggal,
                  "ttpsd_tbudqsh0_id" : document.getElementById('tbudqsh0_id').value,
                  "ttpsd_mpro_id"     : document.getElementById('tbudqsh0_mpro_id').value,
                  "ttpsd_diskripsi_material"     : $(tr).find('td:eq(1)').text(),
                  "ttpsd_id"          : $(tr).find('td:eq(1) input#ttpsd_id').val(),
                  "ttpsd_tbudqsd_id"  : $(tr).find('td:eq(1) input#tbudqsd_id').val(),
                  "ttpsd_tbudqsm_id"  : $(tr).find('td:eq(1) input#tbudqsm_id').val(),
                  "ttpsd_tbudqsm1_id" : $(tr).find('td:eq(1) input#tbudqsm1_id').val(),
                  "ttpsd_tbudqsh_id"  : $(tr).find('td:eq(1) input#tbudqsd_tbudqsh_id').val(), 
                  "ttpsd_satuan"      : $(tr).find('td:eq(2)').text(),
                  "ttpsd_qtyprog1"    : parseInt(qtyprog1),
                  "ttpsd_qtyprog2"    : parseInt(qtyprog2),
                  "ttpsd_qtyprog3"    : parseInt(qtyprog3),
                  "ttpsd_qtyprog4"    : parseInt(qtyprog4),
                  "ttpsd_qtyprog5"    : parseInt(qtyprog5)
              };
            }
            counter += $(tr).find('td:eq(5) input#qtyProg1').val() + $(tr).find('td:eq(6) input#qtyProg2').val() + $(tr).find('td:eq(7) input#qtyProg3').val() + $(tr).find('td:eq(8) input#qtyProg4').val() + $(tr).find('td:eq(9) input#qtyProg5').val();
            //counter = counter + $(tr).find('td:eq(5)').val();
        }); 
      var jsonDetail = JSON.stringify(TableData);
      //console.log(jsonDetail);
      if (counter != 0) {
        return jsonDetail;
      } else { return counter;}
       
    }
    
    

    function changeRAP(x) {
      var id=$(x).val();
      var tgl=document.getElementById('tgl_laporan').value;
      //alert(id+' / '+tgl);
      $.getJSON("<?php echo site_url('terpasang/get_RAPDetail/');?>"+id+"/"+tgl, function(data) {
        //alert(data.terpasang_header[0].ttpsh_ttpsh1_id);
          showdataRAPDetail(data);
      });
    }    

    function showdataRAPDetail(data) {
      var header  = data.rap_header;
      var detail  = data.rap_detail;
      var header1 = data.terpasang_header == false ? 0 : data.terpasang_header;
      //console.log(header1);
      var header1Id = header1 == 0 ? 0 : header1[0].ttpsh_ttpsh1_id;
      var headId = header1 == 0 ? 0 : header1[0].ttpsh_id;
      //console.log(header1Id);
      var kontrak = data.rap_header[0].TBUDQSH0_JENIS_KONTRAK == 1 ? "KONTRAK UTAMA" : "KERJA TAMBAH";
      //console.log(detail);
      document.getElementById('pasangHeaderId').value     = header1Id ; //data.tgl_pasang.tanggal;
      document.getElementById('pasangHeadId').value       = headId ; //data.tgl_pasang.tanggal;
      document.getElementById('tbudqsh0_mpro_id').value   = header[0].tbudqsh0_mpro_id;
      document.getElementById('tbudqsh0_rev_no').value    = header[0].TBUDQSH0_REV_NO;
      document.getElementById('tbudqsh0_id').value        = header[0].tbudqsh0_id;
      document.getElementById('tbudqsh0_spvid').value     = header[0].tbudqsh0_spvid;
      document.getElementById('tbudqsh0_subkonid').value  = header[0].tbudqsh0_subkonid;
      document.getElementById('tbudqsh0_spk_id').value    = header[0].tbudqsh0_spk_id;
                  
      document.getElementById('judulLaporan').innerHTML   = 'Detail Terpasang Subkon: '+header[0].tbudqsh0_namasubkon;
      document.getElementById('edPekerjaan').value    = header[0].TBUDQSH0_PEKERJAAN;
      document.getElementById('edSubPekerjaan').value = header[0].TBUDQSH0_SUB_PEKERJAAN;
      document.getElementById('edGambar').value       = header[0].TBUDQSH0_NOGAMBAR;
      document.getElementById('edLokasi').value       = header[0].TBUDQSH0_GEDUNG+'/'+header[0].TBUDQSH0_LANTAI+'/'+header[0].TBUDQSH0_KODEUNIT;
      //document.getElementById('edLantai').value       = header[0].TBUDQSH0_LANTAI;
      //document.getElementById('edKodeUnit').value     = header[0].TBUDQSH0_KODEUNIT;
      document.getElementById('edJenisKontrak').value = kontrak;
      document.getElementById('edSupervisor').value   = header[0].tbudqsh0_namasupervisor;
      document.getElementById('edSubkon').value       = header[0].tbudqsh0_namasubkon;
      
      if (header1Id == 0 ) {
        var html = '';
          var i;
          var no;
          for (i=0; i<detail.length; i++) {
            no = i+1;
            html += 
              '<tr>'+
                '<td>'+no+'</td>'+
                '<td>'+detail[i].TBUDQSD_DISKRIPSI_MATERIAL+''+
                '<input style="display:none" id="tbudqsd_id" type="hidden" value="'+detail[i].TBUDQSD_ID+'">'+
                '<input id="tbudqsm_id" type="hidden" value="'+detail[i].tbudqsm_id+'">'+
                '<input id="tbudqsm1_id" type="hidden" value="'+detail[i].tbudqsm1_id+'">'+
                '<input id="tbudqsd_tbudqsh_id" type="hidden" value="'+detail[i].TBUDQSD_TBUDQSH_ID+'"">'+
                '<input id="ttpsd_id" type="hidden" value="0">'+
                '</td>'+
                '<td>'+detail[i].TBUDQSD_SATUAN+'</td>'+
                '<td style="text-align: right">'+detail[i].TBUDQSD_QTYRAP_VALID+'</td>'+
                '<td style="text-align: right">'+detail[i].TBUDQSD_QTYBPB+'</td>'+
                '<td>'+
                  '<div class="input-group input-group-sm">'+
                  '<input id="oldqtyProg1" tabIndex="-1" type="text" style="text-align:right" class="form-control" readonly value="'+detail[i].tbudqsm1_qtyprog1+'" >'+
                  '<input id="prevoldqtyProg1" type="hidden" value="'+detail[i].tbudqsm1_qtyprog1+'">'+
                  '<input id="qtyProg1" onchange="qtyprog1(this)" type="text" style="text-align:right; color: blue;" class="form-control qtyProg1">'+
                  '<input id="prevqtyProg1" type="hidden" value="0">'+
                  '</div>'+
                  //onchange="qtyprog1(this.value)"
                '</td>'+
                '<td>'+
                  '<div class="input-group input-group-sm">'+
                  '<input id="oldqtyProg2" tabIndex="-1" type="text" style="text-align:right" class="form-control oldqtyProg2" readonly value="'+detail[i].tbudqsm1_qtyprog2+'">'+
                  '<input id="prevoldqtyProg2" type="hidden" value="'+detail[i].tbudqsm1_qtyprog2+'">'+
                  '<input id="qtyProg2" onchange="qtyprog2(this)" type="text" style="text-align:right; color: blue;" class="form-control qtyProg2">'+
                  '<input id="prevqtyProg2" type="hidden" value="0">'+
                  '</div>'+
                '</td>'+
                '<td>'+
                  '<div class="input-group input-group-sm">'+
                  '<input id="oldqtyProg3" tabIndex="-1" type="text" style="text-align:right" class="form-control" readonly value="'+detail[i].tbudqsm1_qtyprog3+'">'+
                  '<input id="prevoldqtyProg3" type="hidden" value="'+detail[i].tbudqsm1_qtyprog3+'">'+
                  '<input id="qtyProg3" onchange="qtyprog3(this)" type="text" style="text-align:right; color: blue;" class="form-control qtyProg3">'+
                  '<input id="prevqtyProg3" type="hidden" value="0">'+
                  '</div>'+
                '</td>'+
                '<td>'+
                  '<div class="input-group input-group-sm">'+
                  '<input id="oldqtyProg4" tabIndex="-1" type="text" style="text-align:right" class="form-control" readonly value="'+detail[i].tbudqsm1_qtyprog4+'">'+
                  '<input id="prevoldqtyProg4" type="hidden" value="'+detail[i].tbudqsm1_qtyprog4+'">'+
                  '<input id="qtyProg4" onchange="qtyprog4(this)" type="text" style="text-align:right; color: blue;" class="form-control qtyProg4">'+
                  '<input id="prevqtyProg4" type="hidden" value="0">'+
                  '</div>'+
                '</td>'+
                '<td>'+
                  '<div class="input-group input-group-sm">'+
                  '<input id="oldqtyProg5" tabIndex="-1" type="text" style="text-align:right" class="form-control" readonly value="'+detail[i].tbudqsm1_qtyprog5+'">'+
                  '<input id="qtyProg5" onchange="qtyprog5(this)" type="text" style="text-align:right; color: blue;" class="form-control qtyProg5">'+
                  '<input id="prevqtyProg5" type="hidden" value="0">'+
                  '</div>'+
                '</td>'+
                //onchange="qtyprog5(this.value)"
                /*
                '<td class="text-right">'+
                      '<a class="btn btn-danger btn-sm" title="Hapus" href="#" data-toggle="tooltip">'+
                        '<i class="fas fa-minus-circle"></i>'+
                      '</a>'+
                '</td>'+
                */
              '</tr>';
          }
      } else {
        var html = '';
          var i;
          var no;
          for (i=0; i<detail.length; i++) {
            no = i+1;
            html += 
              '<tr>'+
                '<td>'+no+'</td>'+
                '<td>'+detail[i].TBUDQSD_DISKRIPSI_MATERIAL+''+
                '<input id="tbudqsd_id" type="hidden" value="'+detail[i].TBUDQSD_ID+'">'+
                '<input id="tbudqsm_id" type="hidden" value="'+detail[i].tbudqsm_id+'">'+
                '<input id="tbudqsm1_id" type="hidden" value="'+detail[i].tbudqsm1_id+'">'+
                '<input id="ttpsd_id" type="hidden" value="'+detail[i].ttpsd_id+'">'+
                '<input type="hidden" value="'+detail[i].ttpsh_tanggal+'">'+
                '<input id="tbudqsd_tbudqsh_id" type="hidden" value="'+detail[i].TBUDQSD_TBUDQSH_ID+'"">'+
                '</td>'+
                '<td>'+detail[i].TBUDQSD_SATUAN+'</td>'+
                '<td style="text-align: right">'+detail[i].TBUDQSD_QTYRAP_VALID+'</td>'+
                '<td style="text-align: right">'+detail[i].TBUDQSD_QTYBPB+'</td>'+
                '<td>'+
                  '<div class="input-group input-group-sm">'+
                  '<input id="oldqtyProg1" tabIndex="-1" type="text" style="text-align:right" class="form-control oldqtyprog1" readonly value="'+detail[i].tbudqsm1_qtyprog1+'" >'+
                  '<input id="qtyProg1" onchange="qtyprog1(this)" type="text" style="text-align:right; color: blue;" class="form-control qtyProg1" value="'+detail[i].ttpsd_qtyprog1+'">'+
                  '<input id="prevqtyProg1" type="hidden" value="'+detail[i].ttpsd_qtyprog1+'">'+
                  '</div>'+
                  // onchange="qtyprog1(this.value)" 
                '</td>'+
                '<td>'+
                  '<div class="input-group input-group-sm">'+
                  '<input id="oldqtyProg2" tabIndex="-1" type="text" style="text-align:right" class="form-control oldqtyProg2" readonly value="'+detail[i].tbudqsm1_qtyprog2+'">'+
                  '<input id="qtyProg2" onchange="qtyprog2(this)" type="text" style="text-align:right; color: blue;" class="form-control qtyProg2" value="'+detail[i].ttpsd_qtyprog2+'">'+
                  '<input id="prevqtyProg2" type="hidden" value="'+detail[i].ttpsd_qtyprog2+'">'+
                  '</div>'+
                '</td>'+
                '<td>'+
                  '<div class="input-group input-group-sm">'+
                  '<input id="oldqtyProg3" tabIndex="-1" type="text" style="text-align:right" class="form-control" readonly value="'+detail[i].tbudqsm1_qtyprog3+'">'+
                  '<input id="qtyProg3" onchange="qtyprog3(this)" type="text" style="text-align:right; color: blue;" class="form-control qtyProg3" value="'+detail[i].ttpsd_qtyprog3+'">'+
                  '<input id="prevqtyProg3" type="hidden" value="'+detail[i].ttpsd_qtyprog3+'">'+
                  '</div>'+
                '</td>'+
                '<td>'+
                  '<div class="input-group input-group-sm">'+
                  '<input id="oldqtyProg4" tabIndex="-1" type="text" style="text-align:right" class="form-control" readonly value="'+detail[i].tbudqsm1_qtyprog4+'">'+
                  
                  '<input id="qtyProg4" onchange="qtyprog4(this)" type="text" style="text-align:right; color: blue;" class="form-control" value="'+detail[i].ttpsd_qtyprog4+'">'+
                  '<input id="prevqtyProg4" type="hidden" value="'+detail[i].ttpsd_qtyprog4+'">'+

                  '</div>'+
                '</td>'+
                '<td>'+
                  '<div class="input-group input-group-sm">'+
                  '<input id="oldqtyProg5" tabIndex="-1" type="text" style="text-align:right" class="form-control" readonly value="'+detail[i].tbudqsm1_qtyprog5+'">'+
                  '<input id="qtyProg5" onchange="qtyprog5(this)" type="text" style="text-align:right; color: blue;" class="form-control" value="'+detail[i].ttpsd_qtyprog5+'">'+
                  '<input id="prevqtyProg5" type="hidden" value="'+detail[i].ttpsd_qtyprog5+'">'+
                  '</div>'+
                '</td>'+

                //
                
                /*
                '<td class="text-right">'+
                      '<a class="btn btn-danger btn-sm" title="Hapus" href="#" data-toggle="tooltip">'+
                        '<i class="fas fa-minus-circle"></i>'+
                      '</a>'+
                '</td>'+
                */
              '</tr>';
          }
      }
        $('#dataRAPDetail').html(html);
        //$('.btn-header-simpan').attr("disabled", false);  
    }

  </script>
  