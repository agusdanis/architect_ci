 <?php
                  if ($rap) {
                    foreach ($rap as $row) {
                      
                      if (0 > 0) {
                        $dev_arrow = "fa-arrow-up"; $dev_text = "text-success"; $bar_color = "bg-green";
                      } else if (0 < 0) {
                          $dev_arrow = "fa-arrow-down"; $dev_text = "text-danger"; $bar_color = "bg-red";
                      } else {
                          $dev_arrow = "fa-arrow-right"; $dev_text = "text-gray"; $bar_color = "bg-black";
                      }
                      if (1 > 0) {
                        $wdev_arrow = "fa-arrow-up"; $wdev_text = "text-success"; 
                      } else if (1 < 0) {
                          $wdev_arrow = "fa-arrow-down"; $wdev_text = "text-danger"; 
                      } else {
                          $wdev_arrow = "fa-arrow-right"; $wdev_text = "text-gray"; 
                      }
                      if (1 > 0) {
                        $mdev_arrow = "fa-arrow-up"; $mdev_text = "text-success"; 
                      } else if (1 < 0) {
                          $mdev_arrow = "fa-arrow-down"; $mdev_text = "text-danger"; 
                      } else {
                          $mdev_arrow = "fa-arrow-right"; $mdev_text = "text-gray"; 
                      }
                      
                ?>
                  <tr class='clickable_row' data-href="<?php echo base_url();?>rap/rap_detail/<?php echo $row->TBUDQSH0_ID; ?>/<?php echo $row->TBUDQSH0_REV_NO; ?>">

 <td><a><?php echo $row->norap?>-R<?php echo $row->TBUDQSH0_REV_NO;?></a></td>
                      <td><a><?php echo $row->TBUDQSH0_NOGAMBAR;?></a></td>
                      <td><a><?php echo $row->TBUDQSH0_PEKERJAAN;?></a><br>
                        <small><?php echo $row->TBUDQSH0_SUB_PEKERJAAN;?></small></td>
                      <td><a><?php echo $row->TBUDQSH0_LANTAI;?></a><br>
                        <small><?php echo $row->TBUDQSH0_ZONA;?></small></td>
                      <td class="project_progress">
                            
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-blue" role="progressbar" aria-volumenow="<?php //echo $row->mpro_rencana_bl?>" aria-volumemin="0" aria-volumemax="100" style="width: <?php //echo $row->mpro_rencana_bl?>%">
                                  Rencana: <?php //echo $row->mpro_rencana_bl?>%
                                </div>
                            </div>
                            <div class="progress progress">
                                <div class="progress-bar <?php //echo $bar_color;?>" role="progressbar" aria-volumenow="<?php //echo $row->mpro_progress_bl?>" aria-volumemin="0" aria-volumemax="100" style="width: <?php //echo $row->mpro_progress_bl?>%">
                                  Aktual: <?php //echo $row->mpro_progress_bl?>%
                                </div>
                            </div>
                                  
                          <!--  
                          <small>
                              57% Complete
                          </small><br>-->
                          
                          <small>Mingguan: </small>
                          <small class="<?php //echo $wdev_text;?> mr-1">
                              <i class="fas <?php //echo $wdev_arrow;?>"></i> <?php //echo $row->prog_minggu_ini;?>%
                          </small>
                          <small>
                              Bulanan: 
                          </small>
                          <small class="<?php //echo $mdev_text;?> mr-1">
                              <i class="fas <?php //echo $mdev_arrow;?>"></i> <?php //echo $row->prog_bulan_ini;?>%
                          </small><br>
                      </td>
                      <td class="project-state">
                          <div class="<?php echo $dev_text;?> mr-1">
                            <i class="fas <?php echo $dev_arrow;?>"></i> <?php echo '0';?>%
                          </div>  
                      </td>
                      <td><a>Supervisor</a><br>
                        <a>Pelaksana</a></td>
                      
                      
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="<?php echo base_url();?>rap/rap_detail/<?php echo $row->TBUDQSH0_ID; ?>/<?php echo $row->TBUDQSH0_REV_NO; ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              
                          </a>
                      </td>

                          </tr>
                  
                <?php } } ?>