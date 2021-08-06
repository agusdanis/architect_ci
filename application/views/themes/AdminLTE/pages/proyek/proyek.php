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
            <h1>PROYEK AKTIF</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Proyek</li>
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
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Progress Report</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
              <!--
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
            -->
          </div>
        </div>
        <div class="card-body table-responsive p-0">
          <table id="tabelProyek" class="table table-hover  projects">
              <thead>
                  <tr>
                      <th style="width: 8%">
                          #
                      </th>
                      <th style="width: 15%">
                          Nama Proyek
                      </th>
                      <th style="width: 15%">
                          Team Leader
                      </th>
                      <th style="width: 25%">
                          Nilai
                      </th>
                      <th style="width: 25%">
                          Progress
                      </th>
                      <th style="width: 10%" class="text-center">
                          Status
                      </th>
                      <th style="width: 5%">
                          Sisa hari
                      </th>
                      <th style="width: 30%">
                      </th>
                  </tr>
              </thead>
              <tbody>

                <?php
                  if ($proyek) {
                    foreach ($proyek as $row) {
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
                ?>
                  <tr>
                      <td><a><?php echo $row->mpro_kodeproyek?></a></td>
                      <td>
                          <a><b><?php echo $row->mpro_namaproyek?></b></a><br/>
                          <small>Start: <?php echo $row->mpro_tanggalmulai?></small><br>
                          <small>End: <?php echo $row->mpro_tanggalselesai?></small>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  
                                  <img display="block" text-align="center" alt="<?php echo $row->mpro_pk;?>" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar.png">
                                  <p><small><?php echo $row->mpro_pk;?></small></p>
                                  
                              </li>
                              <!--
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar2.png">
                              </li>
                              -->
                              
                              <li class="list-inline-item">
                                  
                                  <img display="block" text-align="center" alt="<?php echo $row->mpro_pm;?>" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar04.png">
                                  <p><small><?php echo $row->mpro_pm;?></small></p>
                                  
                              </li>
                              <!--
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar04.png">
                              </li>
                              -->
                          </ul>
                      </td>
                      <td>
                        <b><?php echo number_format($row->totalkontrak);?></b>M [
                          <?php
                            $skope = explode(";", $row->skp_kode); 
                            
                            for ($i=0; $i<count($skope); $i++) {
                              //foreach ($skope as $kode) {
                              if ($skope[$i]) {
                                switch ($skope[$i]) {
                                  case "EL": $warna = 'badge-primary'; break;
                                  case "EC": $warna = 'badge-info'; break;
                                  case "FF": $warna = 'badge-danger'; break;
                                  case "PL": $warna = 'badge-warning'; break;
                                  case "AC": $warna = 'badge-success'; break;
                                  default: $warna = 'badge-success'; 
                                } 
                                echo '<span class="badge '.$warna.'">'.$skope[$i].'</span>';
                              }
                            }
                            /*
                            for ($x=0; $x<count($skope); $x++) {
                              switch ($skope[$x]) {
                                case "EL": $warna = 'badge-primary'; break;
                                case "EC": $warna = 'badge-info'; break;
                                case "FF": $warna = 'badge-danger'; break;
                                case "PL": $warna = 'badge-warning'; break;
                                case "AC": $warna = 'badge-success'; break;
                                default: $warna = 'badge-success'; 
                              }
                              echo '<span class="badge '.$warna.'">'.$skope[$x].'</span>';
                            }
                            */
                          ?>
                          <!--
                          <span class="badge badge-primary">EL</span>
                          <span class="badge badge-info">EC</span>
                          <span class="badge badge-danger">FF</span>
                          <span class="badge badge-warning">PL</span>
                          <span class="badge badge-success">AC</span>
                          -->
                        ]<br>
                        <?php if ($row->total_eq > 0) { ?>
                          <span class="badge badge-primary">EQ: <?php echo number_format($row->total_eq);?>M</span>
                        <?php } ?>
                        <?php if ($row->total_in > 0) { ?>
                        <span class="badge badge-success">IN: <?php echo number_format($row->total_in);?>M</span>
                        <?php } ?>
                        <?php if ($row->total_lb > 0) { ?>
                        <span class="badge badge-warning">LB: <?php echo number_format($row->total_lb);?>M</span>
                        <?php } ?>
                        <br>
                        <?php echo $row->mpro_type?>
                        
                      </td>
                      <td class="project_progress">
                            
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-blue" role="progressbar" aria-volumenow="<?php echo $row->mpro_rencana_bl?>" aria-volumemin="0" aria-volumemax="100" style="width: <?php echo $row->mpro_rencana_bl?>%">
                                  Rencana: <?php echo $row->mpro_rencana_bl?>%
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar <?php echo $bar_color;?>" role="progressbar" aria-volumenow="<?php echo $row->mpro_progress_bl?>" aria-volumemin="0" aria-volumemax="100" style="width: <?php echo $row->mpro_progress_bl?>%">
                                  Aktual: <?php echo $row->mpro_progress_bl?>%
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-lime" role="progressbar" aria-volumenow="50" aria-volumemin="0" aria-volumemax="100" style="width: 50%">
                                  Payment: 50%
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-red" role="progressbar" aria-volumenow="<?php echo $row->progress_material?>" aria-volumemin="0" aria-volumemax="100" style="width: <?php echo $row->progress_material?>%">
                                  Material: <?php echo $row->progress_material?>%
                                </div>
                            </div>
                            
                            <div class="progress">
                                <div class="progress-bar bg-black" role="progressbar" aria-volumenow="<?php echo $row->progress_upah?>" aria-volumemin="0" aria-volumemax="100" style="width: <?php echo $row->progress_upah?>%">
                                  Subkon: <?php echo $row->progress_upah?>%
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-yellow" role="progressbar" aria-volumenow="<?php echo $row->progress_mandays?>" aria-volumemin="0" aria-volumemax="100" style="width: <?php echo $row->progress_mandays?>%">
                                  Mandays: <?php echo $row->progress_mandays?>%
                                </div>
                            </div>
                                  
                          <!--  
                          <small>
                              57% Complete
                          </small><br>-->
                          
                          <small>Mingguan: </small>
                          <small class="<?php echo $wdev_text;?> mr-1">
                              <i class="fas <?php echo $wdev_arrow;?>"></i> <?php echo $row->prog_minggu_ini;?>%
                          </small>
                          <small>
                              Bulanan: 
                          </small>
                          <small class="<?php echo $mdev_text;?> mr-1">
                              <i class="fas <?php echo $mdev_arrow;?>"></i> <?php echo $row->prog_bulan_ini;?>%
                          </small><br>
                      </td>
                      
                      <td class="project-state">
                          <div class="<?php echo $dev_text;?> mr-1">
                            <i class="fas <?php echo $dev_arrow;?>"></i> <?php echo ($row->dev_bulan_ini);?>%
                          </div>  
                      </td>
                      <td class="project-state">
                          <div class="text-blue"><b><?php echo ($row->days_left);?></b>d</div>  
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="<?php echo base_url();?>proyek/proyek_edit/<?php echo $row->mpro_id; ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              
                          </a>
                      </td>
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
    $(document).ready(function() {
      $("#cariSesuatu").keyup(function(){
        var searchText = $(this).val().toLowerCase();
        // Show only matching TR, hide rest of them
        $.each($("#tabelProyek tbody tr"), function() {
          if($(this).text().toLowerCase().indexOf(searchText) === -1)
            $(this).hide();
          else
            $(this).show();                
        });
      });
    });
  </script>
  