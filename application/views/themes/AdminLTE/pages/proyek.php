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
          <h3 class="card-title">Proyek</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body table-responsive p-0">
          <table class="table table-hover  projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
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
                      <th style="width: 5%" class="text-center">
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

                
                  <tr>
                      <td>
                          <a>P1703</a>
                      </td>
                      <td>
                          <a>
                              SouthGate Mall
                          </a>
                          <br/>
                          <small>
                              Started 01.01.2019
                          </small>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar2.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar3.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar04.png">
                              </li>
                          </ul>
                      </td>
                      <td>
                        100M [
                          <span class="badge badge-primary">EL</span>
                          <span class="badge badge-info">EC</span>
                          <span class="badge badge-danger">FF</span>
                          <span class="badge badge-warning">PL</span>
                          <span class="badge badge-success">AC</span>
                        ]<br>
                        <span class="badge badge-primary">EQ: 50M</span>
                        <span class="badge badge-success">IN: 25M</span>
                        <span class="badge badge-warning">LB: 25M</span>
                        
                      </td>
                      <td class="project_progress">
                            
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-blue" role="progressbar" aria-volumenow="63" aria-volumemin="0" aria-volumemax="100" style="width: 63%">
                                  63% Plan
                                </div>
                            </div>
                            <div class="progress progress">
                                <div class="progress-bar bg-red" role="progressbar" aria-volumenow="57" aria-volumemin="0" aria-volumemax="100" style="width: 57%">57% Actual
                                </div>
                            </div>
                                  
                          <!--  
                          <small>
                              57% Complete
                          </small><br>-->
                          
                          <small>This Week: </small>
                          <small class="text-success mr-1">
                              <i class="fas fa-arrow-up"></i> 2%
                          </small>
                          <small>
                              This Month: 
                          </small>
                          <small class="text-success mr-1">
                              <i class="fas fa-arrow-up"></i> 5%
                          </small><br>
                      </td>
                      
                      <td class="project-state">
                          <div class="text-danger mr-1">
                            <i class="fas fa-arrow-down"></i> 7.5%
                          </div>  
                      </td>
                      <td class="project-state">
                          <div class="text-blue">90d</div>  
                      </td>
                      <td class="project-actions text-right">
                          <!--
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              
                          </a>
                          -->
                          <a class="btn btn-info btn-sm" href="<?php echo base_url();?>home/project_edit">
                              <i class="fas fa-pencil-alt">
                              </i>
                              
                          </a>
                          <!--
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                          </a>-->
                      </td>
                  </tr>
                  <tr>
                      <td>
                          P1806
                      </td>
                      <td>
                          <a>
                              SouthGate Apartment
                          </a>
                          <br/>
                          <small>
                              Started 01.01.2019
                          </small>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar2.png">
                              </li>
                          </ul>
                      </td>
                      <td>
                        40M (
                          <span class="badge badge-primary">EL</span>
                          <span class="badge badge-info">EC</span>
                          <span class="badge badge-danger">FF</span>
                          <span class="badge badge-warning">PL</span>
                          <span class="badge badge-success">AC</span>
                        )<br>
                        
                        <span class="badge badge-primary">EQ: 0M</span>
                        <span class="badge badge-success">IN: 15M</span>
                        <span class="badge badge-warning">LB: 25M</span>
                      </td>
                      <td class="project_progress">
                          
                          <div class="progress progress-sm">
                                <div class="progress-bar bg-blue" role="progressbar" aria-volumenow="42" aria-volumemin="0" aria-volumemax="100" style="width: 42%">
                                  42% Plan
                                </div>
                            </div>
                            <div class="progress progress">
                                <div class="progress-bar bg-green" role="progressbar" aria-volumenow="47" aria-volumemin="0" aria-volumemax="100" style="width: 47%">47% Actual
                                </div>
                            </div>
                      </td>
                      <td class="project-state">
                          <!--<span class="badge badge-success">Success</span>-->
                          <small class="text-success mr-1">
                            <i class="fas fa-arrow-up"></i> 5%
                          </small>  
                      </td>
                      <td class="project-state">
                          <div class="text-blue">125d</div>  
                      </td>
                      <td class="project-actions text-right">
                          <!--<a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              
                          </a>-->
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              
                          </a>
                          <!--<a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              
                          </a>-->
                      </td>
                  </tr>
                  <tr>
                      <td>
                          P1901
                      </td>
                      <td>
                          <a>
                              BCA Foresta
                          </a>
                          <br/>
                          <small>
                              Started 01.01.2019
                          </small>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar2.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar3.png">
                              </li>
                          </ul>
                      </td>
                      <td>
                        50M (
                          
                          <span class="badge badge-success">AC</span>
                        )<br>
                        <small> EQ: 0M</small><br>
                        <small> IN: 25M</small><br>
                        <small> LB: 25M</small>
                      </td>
                      <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-volumenow="77" aria-volumemin="0" aria-volumemax="100" style="width: 77%">
                              </div>
                          </div>
                          <small>
                              77% Complete
                          </small>
                      </td>
                      <td class="project-state">
                          <!--<span class="badge badge-success">Success</span>-->
                          <small class="text-success mr-1">
                            <i class="fas fa-arrow-up"></i> 5%
                          </small> 
                      </td>
                      <td class="project-state">
                          <div class="text-blue">160d</div>  
                      </td>
                      <td class="project-actions text-right">
                          <!--
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              
                          </a>
                          -->
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              
                          </a>
                          <!--
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                          </a>-->
                      </td>
                  </tr>
                  <tr>
                      <td>
                          P1903
                      </td>
                      <td>
                          <a>
                              Hallo BCA Semarang
                          </a>
                          <br/>
                          <small>
                              Started 01.01.2019
                          </small>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar2.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar3.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar04.png">
                              </li>
                          </ul>
                      </td>
                      <td>
                        100M (
                          <span class="badge badge-success">EL</span>
                          <span class="badge badge-info">EC</span>
                          <span class="badge badge-danger">FF</span>
                          <span class="badge badge-success">PL</span>
                          <span class="badge badge-success">AC</span>
                        )<br>
                        <small> EQ: 50M</small><br>
                        <small> IN: 25M</small><br>
                        <small> LB: 25M</small>
                      </td>
                      <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-volumenow="60" aria-volumemin="0" aria-volumemax="100" style="width: 60%">
                              </div>
                          </div>
                          <small>
                              60% Complete
                          </small>
                      </td>
                      <td class="project-state">
                          <!--<span class="badge badge-success">Success</span>-->
                          <small class="text-success mr-1">
                            <i class="fas fa-arrow-up"></i> 5%
                          </small> 
                      </td>
                      <td class="project-state">
                          <div class="text-blue">160d</div>  
                      </td>
                      <td class="project-actions text-right">
                          <!--
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              
                          </a>
                          -->
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              
                          </a>
                          <!--
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                          </a>-->
                      </td>
                  </tr>
                  <tr>
                      <td>
                          P1807
                      </td>
                      <td>
                          <a>
                              Daswin Tower
                          </a>
                          <br/>
                          <small>
                              Started 01.01.2019
                          </small>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar04.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar5.png">
                              </li>
                          </ul>
                      </td>
                      <td>
                        100M (
                          <span class="badge badge-success">EL</span>
                          <span class="badge badge-info">EC</span>
                          <span class="badge badge-danger">FF</span>
                          <span class="badge badge-success">PL</span>
                          <span class="badge badge-success">AC</span>
                        )<br>
                        <small> EQ: 50M</small><br>
                        <small> IN: 25M</small><br>
                        <small> LB: 25M</small>
                      </td>
                      <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-volumenow="12" aria-volumemin="0" aria-volumemax="100" style="width: 12%">
                              </div>
                          </div>
                          <small>
                              12% Complete
                          </small>
                      </td>
                      <td class="project-state">
                          <!--<span class="badge badge-success">Success</span>-->
                          <small class="text-success mr-1">
                            <i class="fas fa-arrow-up"></i> 5%
                          </small> 
                      </td>
                      <td class="project-state">
                          <div class="text-blue">160d</div>  
                      </td>
                      <td class="project-actions text-right">
                          <!--
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              
                          </a>
                          -->
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              
                          </a>
                          <!--
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                          </a>-->
                      </td>
                  </tr>
                  <tr>
                      <td>
                          P1802
                      </td>
                      <td>
                          <a>
                              Rajawali Place
                          </a>
                          <br/>
                          <small>
                              Started 01.01.2019
                          </small>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar2.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar3.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar04.png">
                              </li>
                          </ul>
                      </td>
                      <td>
                        100M (
                          <span class="badge badge-success">EL</span>
                          <span class="badge badge-info">EC</span>
                          <span class="badge badge-danger">FF</span>
                          <span class="badge badge-success">PL</span>
                          <span class="badge badge-success">AC</span>
                        )<br>
                        <small> EQ: 50M</small><br>
                        <small> IN: 25M</small><br>
                        <small> LB: 25M</small>
                      </td>
                      <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-volumenow="35" aria-volumemin="0" aria-volumemax="100" style="width: 35%">
                              </div>
                          </div>
                          <small>
                              35% Complete
                          </small>
                      </td>
                      <td class="project-state">
                          <!--<span class="badge badge-success">Success</span>-->
                          <small class="text-success mr-1">
                            <i class="fas fa-arrow-up"></i> 5%
                          </small> 
                      </td>
                      <td class="project-state">
                          <div class="text-blue">160d</div>  
                      </td>
                      <td class="project-actions text-right">
                          <!--
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              
                          </a>
                          -->
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              
                          </a>
                          <!--
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                          </a>-->
                      </td>
                  </tr>
                  <tr>
                      <td>
                          P1809
                      </td>
                      <td>
                          <a>
                              Ciputra International Tower 2
                          </a>
                          <br/>
                          <small>
                              Created 01.01.2019
                          </small>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar04.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar5.png">
                              </li>
                          </ul>
                      </td>
                      <td>
                        100M (
                          <span class="badge badge-success">EL</span>
                          <span class="badge badge-info">EC</span>
                          <span class="badge badge-danger">FF</span>
                          <span class="badge badge-success">PL</span>
                          <span class="badge badge-success">AC</span>
                        )<br>
                        <small> EQ: 50M</small><br>
                        <small> IN: 25M</small><br>
                        <small> LB: 25M</small>
                      </td>
                      <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-volumenow="87" aria-volumemin="0" aria-volumemax="100" style="width: 87%">
                              </div>
                          </div>
                          <small>
                              87% Complete
                          </small>
                      </td>
                      <td class="project-state">
                          <!--<span class="badge badge-success">Success</span>-->
                          <small class="text-warning mr-1">
                            <i class="fas fa-arrow-down"></i> 0%
                          </small> 
                      </td>
                      <td class="project-state">
                          <div class="text-blue">160d</div>  
                      </td>
                      <td class="project-actions text-right">
                          <!--
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              
                          </a>
                          -->
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              
                          </a>
                          <!--
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                          </a>-->
                      </td>
                  </tr>
                  <tr>
                      <td>
                          P1805
                      </td>
                      <td>
                          <a>
                              Citra Tower
                          </a>
                          <br/>
                          <small>
                              Started 01.01.2019
                          </small>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar3.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar04.png">
                              </li>
                          </ul>
                      </td>
                      <td>
                        100M (
                          <span class="badge badge-success">EL</span>
                          <span class="badge badge-info">EC</span>
                          <span class="badge badge-danger">FF</span>
                          <span class="badge badge-success">PL</span>
                          <span class="badge badge-success">AC</span>
                        )<br>
                        <small> EQ: 50M</small><br>
                        <small> IN: 25M</small><br>
                        <small> LB: 25M</small>
                      </td>
                      <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-volumenow="77" aria-volumemin="0" aria-volumemax="100" style="width: 77%">
                              </div>
                          </div>
                          <small>
                              77% Complete
                          </small>
                      </td>
                      <td class="project-state">
                          <span class="badge badge-info">On going</span>
                      </td>
                      <td class="project-state">
                          <div class="text-blue">160d</div>  
                      </td>
                      <td class="project-actions text-right">
                          <!--
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              
                          </a>
                          -->
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              
                          </a>
                          <!--
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                          </a>-->
                      </td>
                  </tr>
                  <tr>
                      <td>
                          P1601
                      </td>
                      <td>
                          <a>
                              Jumeirah Resort Bali
                          </a>
                          <br/>
                          <small>
                              Started 01.01.2019
                          </small>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar3.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar04.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo base_url();?>assets/AdminLTE/dist/img/avatar5.png">
                              </li>
                          </ul>
                      </td>
                      <td>
                        100M (
                          <span class="badge badge-success">EL</span>
                          <span class="badge badge-info">EC</span>
                          <span class="badge badge-danger">FF</span>
                          <span class="badge badge-success">PL</span>
                          <span class="badge badge-success">AC</span>
                        )<br>
                        <small> EQ: 50M</small><br>
                        <small> IN: 25M</small><br>
                        <small> LB: 25M</small>
                      </td>
                      <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-volumenow="77" aria-volumemin="0" aria-volumemax="100" style="width: 77%">
                              </div>
                          </div>
                          <small>
                              77% Complete
                          </small>
                      </td>
                      <td class="project-state">
                          <span class="badge badge-danger">Failed</span>
                      </td>
                      <td class="project-state">
                          <div class="text-blue">160d</div>  
                      </td>
                      <td class="project-actions text-right">
                          <!--
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              
                          </a>
                          -->
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              
                          </a>
                          <!--
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                          </a>-->
                      </td>
                  </tr>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  