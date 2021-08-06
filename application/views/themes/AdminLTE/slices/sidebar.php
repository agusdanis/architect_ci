    <!-- Brand Logo -->
    <a href="<?php echo site_url();?>home" class="brand-link">
      <img src="<?php echo base_url();?>assets/AdminLTE/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">APJ PMC</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      
      
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url();?>assets/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?php echo site_url();?>user/profile/<?php echo $this->session->userdata('user_id');?>" class="d-block"><?php echo $this->session->userdata('nama');?></a>
        </div>
      </div>
        

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="<?php echo site_url();?>home" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>

          <?php $access = json_decode($this->session->userdata('access')); ?>
          <!--<?php echo json_encode($access->menus); ?>-->

          
          <?php if($this->session->userdata('nama')) {
            foreach ($access->menus as $key => $menu) { 
            ?>
            
              <li class="nav-item has-treeview">

                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p> <?php echo $menu->top_menu_name; ?><i class="fas fa-angle-left right"></i></p>
                </a>
                                    
                  <ul class="nav nav-treeview">
                    <?php foreach ($menu as $k => $val) {
                      if ($k != "top_menu_name") { 
                        if ($val->view == "yes") { ?>
                        <li class="nav-item">
                          <a href='<?php echo site_url($val->page_name);?>/<?php echo $this->session->userdata('mpro_id'); ?>' class="nav-link">
                          <i class="far <?php echo $val->icon; ?> nav-icon"></i>
                          <p><?php echo $val->menu_name; ?></p>
                          </a>
                        </li>
                    <?php } } } ?>
                  </ul>
                                    
                                    
              </li>
            
            <?php } ?>
          <?php } ?>
          
          <!-- 
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>Proyek
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>proyek/show/<?php echo $this->session->userdata('mpro_id'); ?>" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Progress</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>rap/show/<?php echo $this->session->userdata('mpro_id'); ?>" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>RAP</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>BPB</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>BPM</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>terpasang/show/<?php echo $this->session->userdata('mpro_id'); ?>" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Terpasang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Personil<i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>proyek/staff_show/<?php echo $this->session->userdata('mpro_id'); ?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Staff</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>proyek/subkon_show/<?php echo $this->session->userdata('mpro_id'); ?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Subkon</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>rap/rap_master/<?php echo $this->session->userdata('mpro_id'); ?>" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Master RAP</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-cog"></i>
                <p>Admin<i class="fas fa-angle-left right"></i> 
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/users" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                    <p>Users 
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/users" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                    <p>Users 
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/users" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                    <p>Users 
                  </p>
                </a>
              </li>
            </ul>
          </li>
          -->

          <li class="nav-item">
            <a href="<?php echo base_url();?>login" class="nav-link">
              <i class="nav-icon fas fa-lock"></i>
                <p>Logout 
              </p>
            </a>

          </li>
        

        </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

    