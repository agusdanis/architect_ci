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
            <h1>RAP</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo site_url('rap/show/');?>/<?php echo $this->session->userdata('mpro_id'); ?>">RAP</a></li>
              <li class="breadcrumb-item active">Rap Detail</li>
            </ol>
          </div>
        </div>
    </section>


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
          <h3 class="card-title">RAP: Proyek <?php echo $this->session->userdata('mpro_namaproyek');?></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <!--
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
            -->
          </div>
        </div>
        
        <div class="card-body ">
          <div class="card card-primary card-outline">
            <div class="card-header">
          <?php 
            foreach ($rap_header as $head) {
              //$norap = $head->TBUDQSH0_NORAP;
              $kontrak = $head->TBUDQSH0_JENIS_KONTRAK == 1 ? "KONTRAK UTAMA" : "KERJA TAMBAH";
            } 
          ?>
          <div class="row">
            <div class="form-group col-md-2">
              <small><b>#RAP</b></small><br>
              <div class="input-group">
                <input type="text" id="edNoRAP" class="form-control" value="<?php echo $head->TBUDQSH0_NORAP.'-R'.$head->TBUDQSH0_REV_NO;?>">
              </div>
            </div>
            <div class="form-group col-md-2">
              <small><b>PEKERJAAN</b></small><br>
              <div class="input-group">
                <input type="text" id="edPekerjaan" class="form-control" value="<?php echo $head->TBUDQSH0_PEKERJAAN;?>">
                <input type="text" id="edSubPekerjaan" class="form-control" value="<?php echo $head->TBUDQSH0_SUB_PEKERJAAN;?>">
              </div>
            </div>
            <div class="form-group col-md-2">
              <small><b>#GAMBAR</b></small><br>
              <div class="input-group">
                <input type="text" id="edGambar" class="form-control" value="<?php echo $head->TBUDQSH0_NOGAMBAR;?>">
              </div>
            </div>
            <div class="form-group col-md-4">
              <small><b>GEDUNG/LANTAI/UNIT</b></small><br>
              <div class="input-group">
                <input type="text" id="edGedung" class="form-control" value="<?php echo $head->TBUDQSH0_GEDUNG;?>">
                <input type="text" id="edLantai" class="form-control" value="<?php echo $head->TBUDQSH0_LANTAI;?>">
                <input type="text" id="edUnit" class="form-control" value="<?php echo $head->TBUDQSH0_KODEUNIT;?>">
              </div>
            </div>
            <div class="form-group col-md-2">
              <small><b>JENIS KONTRAK</b></small><br>
              <div class="input-group">
                <input type="text" id="edJenisKontrak" class="form-control" value="<?php echo $kontrak;?>">
              </div>
            </div>
            <div class="form-group col-md-2">
              <small><b>SUPERVISOR</b></small><br>
              <select id="pilihSupervisor" class="form-control select2bs4" style="width: 100%;" onchange="changeSupervisor(this)" disabled>
                <option value="0" selected>-- Pilih Supervisor --</option>
                <?php foreach($supervisor as $spv) { ?>
                  <option value="<?php echo $spv->usr_id; ?>" <?php if ($spv->usr_id == $head->tbudqsh0_spvid) { echo "selected"; }?>>
                    <?php echo $spv->usr_namalengkap; ?></option> ;
                <?php } ?>
              </select>
              
            </div>
            <div class="form-group col-md-2">
              <small><b>PELAKSANA</b></small><br>
              <select id="pilihPelaksana" class="form-control select2bs4" style="width: 100%;" onchange="changePelaksana(this)" disabled>
                <option value="0" selected>-- Pilih Pelaksana --</option>
                <?php foreach($subkon as $sub) { ?>
                  <option value="<?php echo $sub->msub_id; ?>" <?php if ($sub->msub_id == $head->tbudqsh0_subkonid) { echo "selected"; }?>>
                    <?php echo $sub->msub_nama_subkon; ?></option> ;
                <?php } ?>
              </select>
            </div>
            <div class="form-group col-md-2">
              <small><b>SPK</b></small><br>
              <select id="pilihSPK" class="form-control select2bs4" style="width: 100%;" onchange="changeSPK(this)" disabled>
                <option value="0" selected>-- Pilih SPK --</option>
                <?php foreach($spk as $val) { ?>
                  <option value="<?php echo $val->tspk_id; ?>" <?php if ($val->tspk_id == $head->tbudqsh0_spkid) { echo "selected"; }?>>
                    <?php echo $val->tspk_nomor; ?></option> ;
                <?php } ?>
              </select>
            </div>
            <div class="form-group col-md-2">
              <small><b>SCHEDULE SELESAI</b></small><br>
              <div class="input-group">
                <input type="date" id="edScheduleSelesai" class="form-control" value="<?php echo $head->tbudqsh0_schinstall;?>">
              </div>
            </div>
            <div class="form-group col-md-2">
              <small> </small><br>
              <button class="btn btn-header-simpan btn-primary" disabled>Simpan</button>
            </div>

          </div>

          

        </div>
          </div>
          
          <table id="tabelRAP" class="table table-hover table-striped table-responsive">
              <thead>
                  <tr>
                      <th class="th-sm" style="width: 5%">
                          #
                      </th>
                      <th style="width: 30%">
                          Diskripsi Material
                      </th>
                      <th style="width: 10%">
                          Satuan
                      </th>
                      <!--<th style="width: 10%">
                          R0
                      </th>-->
                      <th style="width: 10%">
                          RAP
                      </th>
                      <th style="width: 10%">
                          BPB
                      </th>
                      <th style="width: 10%">
                          Terpasang
                      </th>
                      <!--
                      <th style="width: 10%">
                          Upah
                      </th>
                      <th style="width: 10%">
                          Budget Upah
                      </th>
                      -->
                      <th style="width: 15%">
                          Progress<br/>
                          Pekerjaan
                      </th>
                      <th style="width: 15%">

                      </th>
                  </tr>
              </thead>
              <tbody>

                <?php
                  if ($rap) {
                    $no = 0;
                    foreach ($rap as $row) {
                      if ($row->tbudqsm1_qtypasang < $row->TBUDQSD_QTYRAP_VALID) {
                        $warna_tps = "color: blue"; 
                      } else if ($row->tbudqsm1_qtypasang > $row->TBUDQSD_QTYRAP_VALID) {
                        $warna_tps = "color: red";
                      } else { $warna_tps = ""; }
                      /*
                      if ($row->dev_bulan_ini > 0) {
                        $dev_arrow = "fa-arrow-up"; $dev_text = "text-success"; $bar_color = "bg-green";
                      } else if ($row->dev_bulan_ini < 0) {
                          $dev_arrow = "fa-arrow-down"; $dev_text = "text-danger"; $bar_color = "bg-red";
                      } else {
                          $dev_arrow = "fa-arrow-right"; $dev_text = "text-gray"; $bar_color = "bg-black";
                      }
                      if ($row->prog_minggu_ini > 0) {
                        $wdev_arrow = "fa-arrow-up"; $wdev_text = "text-success"; 
                      } else if ($row->prog_minggu_ini < 0) {
                          $wdev_arrow = "fa-arrow-down"; $wdev_text = "text-danger"; 
                      } else {
                          $wdev_arrow = "fa-arrow-right"; $wdev_text = "text-gray"; 
                      }
                      if ($row->prog_bulan_ini > 0) {
                        $mdev_arrow = "fa-arrow-up"; $mdev_text = "text-success"; 
                      } else if ($row->prog_bulan_ini < 0) {
                          $mdev_arrow = "fa-arrow-down"; $mdev_text = "text-danger"; 
                      } else {
                          $mdev_arrow = "fa-arrow-right"; $mdev_text = "text-gray"; 
                      }
                      */
                      $no++;
                ?>
                  <tr>
                      <td><?php echo $no;?></td>
                      <td><?php echo $row->TBUDQSD_DISKRIPSI_MATERIAL;?></td>
                      <td><?php echo $row->TBUDQSD_SATUAN;?></td>
                      <!--<td><a><?php echo $row->TBUDQSD_QTYRAP_0;?></a></td>-->
                      <td style="text-align: right"><?php echo $row->TBUDQSD_QTYRAP_VALID;?></td>
                      <td style="text-align: right"><?php echo $row->TBUDQSD_QTYBPB;?></td>
                      <!--
                      <td style="text-align: right;"><font style="color: <?php echo $warna_tps;?>"><?php echo $row->tbudqsm1_qtypasang;?></font></td>
                      -->
                      <td style="text-align: right; <?php echo $warna_tps;?>;"><?php echo $row->tbudqsm1_qtypasang;?></td>
                      <!--
                      <td style="text-align: right;"><?php echo number_format($row->tbudqsm_unitpriceupah);?></td>
                      <td style="text-align: right;"><?php echo number_format($row->totalrupiah);?></td>
                      -->
                      <td style="text-align: right;"><?php echo number_format($row->prosenqtypasang);?>%</td>
                      
                      
                      
                      <!--
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="<?php //echo base_url();?><?php //echo $row->mpro_id; ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              
                          </a>
                      </td>
                    -->
                  </tr>
                  
                <?php } } ?>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->


    <script type="text/javascript"> 

      $.ajax({
        url : "<?php echo site_url('admin/get_user_permit');?>",
        method : "POST",
        success: function(userPermit){
          setPermittion(JSON.parse(userPermit).prop.PROYEK);
          //console.log(JSON.parse(userPermit).prop.PROYEK.EDITRAP_SPV.create);
        }
      });

      function setPermittion(permit) {
        var editSPV = permit.EDITRAP_SPV.edit == 'no' ? true : false;
        var editSUB = permit.EDITRAP_SUB.edit == 'no' ? true : false;
        var editSPK = permit.EDITRAP_SPK.edit == 'no' ? true : false;
        $("#pilihSupervisor").attr("disabled", editSPV);
        $("#pilihPelaksana").attr("disabled", editSUB);
        $("#pilihSPK").attr("disabled", editSPK);
      } 

      function changeSupervisor(x) {
        $(".btn-header-simpan").attr("disabled", false);
      }
      function changePelaksana(x) {
        $(".btn-header-simpan").attr("disabled", false);
      }
      function changeSPK(x) {
        $(".btn-header-simpan").attr("disabled", false);
      }
      $('#edScheduleSelesai').on("change", function() {  // id tgl_laporan change
        $(".btn-header-simpan").attr("disabled", false);
      });

      $('.btn-header-simpan').click(function (e) {
      //alert('Okay boss');
        if (confirm("Yakin data sudah benar ?") == true) {
          simpan_data();
        } else {
          alert('Data tidak disimpan !');
        }
      });

      function simpan_data() {
        var id = "<?php echo $rap_header[0]->tbudqsh0_id;?>";
        var spv_id    = $("#pilihSupervisor option:selected").val();
        var spv_text  = $("#pilihSupervisor option:selected").val() == '' ? '' : $("#pilihSupervisor option:selected").text();
        var sub_id    = $("#pilihPelaksana option:selected").val();
        var sub_text  = $("#pilihPelaksana option:selected").val() == '' ? '' : $("#pilihPelaksana option:selected").text();
        var spk_id    = $("#pilihSPK option:selected").val();
        var spk_text  = $("#pilihSPK option:selected").val() == '' ? '' : $("#pilihSPK option:selected").text();
        var schedule  = document.getElementById('edScheduleSelesai').valueAsDate == '' ? '' : document.getElementById('edScheduleSelesai').valueAsDate;
        var RAPHeaderData = new Array();
        RAPHeaderData[0] = {
          "tbudqsh0_id"             : id,
          "tbudqsh0_spvid"          : spv_id,
          "tbudqsh0_namasupervisor" : spv_text,
          "tbudqsh0_subkonid"       : sub_id,
          "tbudqsh0_namasubkon"     : sub_text,
          "tbudqsh0_spk_id"         : spk_id,
          "tbudqsh0_nospk"          : spk_text,
          "tbudqsh0_schinstall"     : schedule,
        }
        //alert(schedule);
        
        var jsonData = JSON.stringify(RAPHeaderData);
        if (jsonData) {
          $.ajax({
            url : "<?php echo site_url('rap/edit_header_rap');?>",
            method : "POST",
            data : {edit_data: jsonData},
            success: function(data){
              alert(data);
            },
            error : function(request, status, error) {
              alert(error);
            } 
          });
        }
        
      }
  </script>

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
  