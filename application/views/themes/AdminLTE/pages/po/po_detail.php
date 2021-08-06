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
          <h3 class="card-title">PO: Proyek <?php echo $this->session->userdata('mpro_namaproyek');?></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        
        <div class="card-body ">
          <div class="card card-primary card-outline">
            <div class="card-header">
          <div class="row">
            <!--
            <div class="form-group col-md-2">
              <small><b>#PO</b></small><br>
              <div class="input-group">
                <input type="text" id="edNoRap" class="form-control" value="<?php echo $head->TBUDQSH0_NORAP.'-R'.$head->TBUDQSH0_REV_NO;?>">
              </div>
            </div>
            <div class="form-group col-md-2">
              <small><b>PEKERJAAN</b></small><br>
              <div class="input-group">
                <input type="text" id="edNoRap" class="form-control" value="<?php echo $head->TBUDQSH0_PEKERJAAN;?>">
                <input type="text" id="edNoRap" class="form-control" value="<?php echo $head->TBUDQSH0_SUB_PEKERJAAN;?>">
              </div>
            </div>
            <div class="form-group col-md-2">
              <small><b>#GAMBAR</b></small><br>
              <div class="input-group">
                <input type="text" id="edNoRap" class="form-control" value="<?php echo $head->TBUDQSH0_NOGAMBAR;?>">
              </div>
            </div>
            <div class="form-group col-md-4">
              <small><b>GEDUNG/LANTAI/ZONA</b></small><br>
              <div class="input-group">
                <input type="text" id="edNoRap" class="form-control" value="<?php echo $head->TBUDQSH0_GEDUNG;?>">
                <input type="text" id="edNoRap" class="form-control" value="<?php echo $head->TBUDQSH0_LANTAI;?>">
                <input type="text" id="edNoRap" class="form-control" value="<?php echo $head->TBUDQSH0_ZONA;?>">
              </div>
            </div>
            <div class="form-group col-md-2">
              <small><b>JENIS KONTRAK</b></small><br>
              <div class="input-group">
                <input type="text" id="edNoRap" class="form-control" value="<?php echo $kontrak;?>">
              </div>
            </div>
          -->
          </div>
        </div>
          </div>
          
          <table class="table table-hover table-responsive">
              <thead>
                  <tr>
                      <th class="th-sm" style="width: 5%">
                          #
                      </th>
                      <th style="width: 25%">
                          Diskripsi Material
                      </th>
                      <th style="width: 10%">
                          Satuan
                      </th>
                      <!--<th style="width: 10%">
                          R0
                      </th>-->
                      <th style="width: 10%">
                          QTY PO
                      </th>
                      <th style="width: 10%">
                          BPB
                      </th>
                      <th style="width: 10%">
                          Dikirim
                      </th>
                      <th style="width: 10%">
                          Harga Satuan
                      </th>
                      <th style="width: 10%">
                          Total
                      </th>
                      <th style="width: 15%">
                          Catatan
                      </th>
                      <th style="width: 30%">

                      </th>
                  </tr>
              </thead>
              <tbody>

                <?php
                  if ($po_header) {
                    $no = 0;
                    foreach ($po as $row) {
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
                      <td><a><?php echo $no;?></a></td>
                      <td><a><?php echo $row->TPOD_DISKRIPSI_MATERIAL;?></a></td>
                      <td><a><?php echo $row->TPOD_MKS_SATUAN;?></a></td>
                      <!--<td><a><?php echo $row->TBUDQSD_QTYRAP_0;?></a></td>-->
                      
                      <td><a><?php echo $row->tpod_qty_po;?></a></td>
                      <td><a><?php echo $row->TPOD_QTYBPB;?></a></td>
                      <td></td>
                      
                      <td style="text-align: right;"><?php echo number_format($row->tpod_unitprice_konversi);?></td>
                      <td></td>
                      <td><a><?php //echo $row->TBUDQSH0_ZONA;?></a></td>
                      
                      
                      
                      
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="<?php //echo base_url();?><?php //echo $row->mpro_id; ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              
                          </a>
                      </td>
                  </tr>
                  
                <?php } } ?>
              </tbody>
              
          </table>
          <tfoot>
            <tr>
             Total PO
            </tr>
          </tfoot>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  