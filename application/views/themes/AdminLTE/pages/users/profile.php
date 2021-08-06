    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('home');?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url('admin/users');?>">User</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <?php foreach($user as $usr ) { ?>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo base_url();?>assets/AdminLTE/dist/img/user8-128x128.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $usr->usr_username.' '.$usr->usr_namalengkap; ?></h3>

                <p class="text-muted text-center"><?php echo $usr->usr_jabatan; ?></p>

                <!--
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                  </li>
                </ul>


                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <!--
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at Knoxville
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Malibu, California</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>
              
            </div>
            -->
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-md-9">
            <div class="card">
              
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#password" data-toggle="tab">Password</a></li>
                  <li class="nav-item"><a class="nav-link" href="#proyek" data-toggle="tab">Proyek</a></li>
                <!--  
                  <li class="nav-item"><a class="nav-link" href="#activity" data-toggle="tab">Activity</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                -->
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
              </div><!-- /.card-header -->

              <div class="card-body">
                <div class="tab-content">
                  
                  <div class="active tab-pane" id="password">
                    <label><h3>Ganti/reset password</h3></label>
                    <form class="form-horizontal" action="<?php echo site_url('user/change_passwd'); ?>" method="post">
                      <div class="form-group row">
                        <label for="Password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="password1" name="password" placeholder="Password">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="Password2" class="col-sm-2 col-form-label">Konfirmasi</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="password2" name="password2" placeholder="Konfirmasi password">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Saya setuju dengan <a href="#">syarat dan ketentuan</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <!--
                          <button type="submit" name="submitGantiPasswd" id="gantiPasswd" class="btn btn-success" onclick="return confirm('Yakin password akan diganti ?')">Simpan</button>
                          -->
                          <a href="javascript:void(0)" class="btn gantiPasswd btn-primary" title ="Simpan" data-toggle="tooltip">
                            <i class="glyphicon glyphicon-ok"></i>    Simpan
                          </a>

                          <a href="javascript:void(0)" class="btn resetPasswd btn-danger" title ="Reset password: arista" data-toggle="tooltip">
                            <i class="glyphicon glyphicon-ok"></i>    Reset Password
                          </a>
                          <!--
                          <button type="submit" name="submitResetPasswd" id="submitResetPasswd" class="btn btn-danger" onclick="return confirm('Yakin password akan direset ?')">Reset</button>
                          -->
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="<?php echo base_url();?>assets/AdminLTE/dist/img/user1-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Shared publicly - 7:30 PM today</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post clearfix">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="<?php echo base_url();?>assets/AdminLTE/dist/img/user7-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Sarah Ross</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Sent you a message - 3 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>

                      <form class="form-horizontal">
                        <div class="input-group input-group-sm mb-0">
                          <input class="form-control form-control-sm" placeholder="Response">
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-danger">Send</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="<?php echo base_url();?>assets/AdminLTE/dist/img/user6-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Adam Jones</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Posted 5 photos - 5 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <div class="row mb-3">
                        <div class="col-sm-6">
                          <img class="img-fluid" src="<?php echo base_url();?>assets/AdminLTE/dist/img/photo1.png" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <div class="row">
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="<?php echo base_url();?>assets/AdminLTE/dist/img/photo2.png" alt="Photo">
                              <img class="img-fluid" src="<?php echo base_url();?>assets/AdminLTE/dist/img/photo3.jpg" alt="Photo">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="<?php echo base_url();?>assets/AdminLTE/dist/img/photo4.jpg" alt="Photo">
                              <img class="img-fluid" src="<?php echo base_url();?>assets/AdminLTE/dist/img/photo1.png" alt="Photo">
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
                      </p>
                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->
                  </div>


                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-danger">
                          10 Feb. 2014
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-envelope bg-primary"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 12:05</span>

                          <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                          <div class="timeline-body">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                            quora plaxo ideeli hulu weebly balihoo...
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-primary btn-sm">Read more</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-user bg-info"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                          <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                          </h3>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-comments bg-warning"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                          <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                          <div class="timeline-body">
                            Take me to your leader!
                            Switzerland is small and neutral!
                            We are more like Germany, ambitious and misunderstood!
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-success">
                          3 Jan. 2014
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-camera bg-purple"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                          <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                          <div class="timeline-body">
                            <img src="http://placehold.it/150x100" alt="...">
                            <img src="http://placehold.it/150x100" alt="...">
                            <img src="http://placehold.it/150x100" alt="...">
                            <img src="http://placehold.it/150x100" alt="...">
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="Name" value="<?php echo $usr->usr_namalengkap; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="<?php echo $usr->usr_email; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPhone" placeholder="Phone Number" value="<?php echo $usr->usr_nohp; ?>">
                        </div>
                      </div>
                      <!--
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                        </div>
                      </div>
                      -->
                      <div class="form-group row">
                        <label for="inputJabatan" class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputJabatan" placeholder="Jabatan" value="<?php echo $usr->usr_jabatan; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputDivisi" class="col-sm-2 col-form-label">Divisi</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputJabatan" placeholder="Divisi" value="<?php echo $usr->usr_divisi; ?>">
                        </div>
                      </div>
                      
                      <!--
                      <?php $access = json_decode($this->session->userdata('access')); 
                        foreach ($access->prop as $key => $prop) {
                      
                        if ($prop->ADMIN->CHANGE_ROLE == "ADMINISTRATOR") { ?>
                      <div class="form-group row">
                        <label><?php echo ($this->session->userdata('access')->prop->ADMIN->CHANGE_ROLE);?> </label>
                        <label for="pilihRole" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="add_pilihRole" id="pilihRole" onchange="roleChange(this)">
                            <option value="null">-- pilih Role --</option>
                            <?php foreach ($rolecode as $role) { ?>
                              <option value="<?php echo $role->role_rolecode; ?>"><?php echo $role->role_rolename; ?></option>
                            <?php } ?>
                          
                          </select>
                        </div>
                        <input type='hidden' class='form-control' name='rolecode' id='rolecode' placeholder='' value="">
                      </div>
                      <?php } } ?>
                      -->
                      
                      <!--
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Saya setuju dengan <a href="#">syarat dan ketentuan</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      
                      
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                      -->
                    </form>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="proyek">
                    <div class="card-body p-0">
                      <div class="row">
                        <div class="col-md-5">
                          <select class="form-control select2bs4" style="width: 100%;" onchange="changeProyek(this)">
                            <?php foreach($allproyek as $allproyek) { ?>
                              <option value="<?php echo $allproyek->mpro_id; ?>" <?php if ($allproyek->mpro_id == $this->session->userdata('mpro_id')) { echo "selected"; }?>>
                                <?php echo $allproyek->mpro_kodeproyek." ".$allproyek->mpro_namaproyek; ?></option> ;
                            <?php } ?>
                          </select>
                        </div>
                        <div class="col-md-4">
              
                          <a class="btn btn-add-proyek btn-primary">Tambah Proyek</a>
                        </div>
                    </div>
                    <table class="table table-stripped table-responsive">
                      <thead>
                        <th>Proyek</th>
                        <th>Tanggal</th>
                        <th>Jabatan</th>

                      </thead>
                      <tbody>
                        <?php foreach ($proyek as $pro) { ?>
                          <tr>
                            <td><?php echo $pro->mpro_namaproyek;?></td>
                            <td><?php echo $pro->usrpro_createddate;?></td>
                            <td><?php echo $pro->usrpro_jabatan;?></td>
                            <td><a class="btn btn-primary">Hapus</a></td>
                          </tr>
                        <?php } ?>
                        
                      </tbody>
                    </table>
                    <tfoot>
                      <!--<button class="btn btn-primary">Simpan</button>-->
                    </tfoot>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <?php } ?>
    <!-- /.content -->
  

  <script type="text/javascript">
  $(document).ready(function(){
    $('.gantiPasswd').on("click", function() {
        //alert("ok");
        var passwd1 = document.getElementById("password1").value;
        var passwd2 = document.getElementById("password2").value;
        
        if ((passwd1 == '') || (passwd2 == '')) {
          alert('Password harus diisi !');
        } else if (passwd1 !== passwd2) {
          alert('Password dan konfirmasi harus sama !');
        } else if (confirm("Yakin password akan diganti ?") == true) {
            //alert('Password ok !');
            var passwd = {'passwd1' : passwd1, 'passwd2' : passwd2 };
            var jsonRows = JSON.stringify(passwd);
            $.ajax({
              url : "<?php echo site_url('user/gantiPasswd');?>",
              //url : $(this).data('url'),
              method : "POST",
              data : {passwd: jsonRows},
              success: function(data){
                alert('Password berhasil diganti ...');
                //alert(data);
              },
                  
              error : function(request, status, error) {
                alert(error);
              } 
            });
          
        }      
    });

    $('.resetPasswd').on("click", function() {
        if (confirm("Yakin password akan diganti ?") == true) {
          var id = <?php echo $this->session->userdata('user_id'); ?>;
          //alert('sukses');
          $.ajax({
            url : "<?php echo site_url('user/resetPasswd/');?>"+id,
            method : "POST",
            success: function(data){
              alert('Password berhasil direset !');
            }
          });    
        }
    });
  });
</script>
