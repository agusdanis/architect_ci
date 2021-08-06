    <?php 
      if ($satu_proyek) { 
        foreach($satu_proyek as $pro) { 
          $nama_proyek = $pro->mpro_namaproyek;
        }
      } else { $nama_proyek = '';}
    ?>
    <!-- Main content -->
    <section id="listStaff" class="content">
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
          <h3 class="card-title" style="color: blue;"><b>STAFF PROYEK</b></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>  
        <div class="card-body table-responsive p-0">
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
            <div class="col-md-8">
              
              <a class="btn btn-add-staff btn-success"><i class="plus"></i> Tambah Staff</a>
            </div>
          </div>
          
          <table  class="table table-hover table-responsive p-2">
              <thead>
                  <tr>
                      <th style="width: 5%">
                          #
                      </th>
                      <th style="width: 20%">
                          Nama
                      </th>
                      <th style="width: 15%">
                          Jabatan
                      </th>
                      <th style="width: 30%">

                      </th>
                  </tr>
              </thead>
              <tbody id="dataStaff" class="dataStaff"> 

              </tbody>
          </table>
        
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->

    <script type="text/javascript"> 
      
      $('.btn-add-staff').click(function (e) {
            e.preventDefault();
            $('#modalAddStaff').modal('show');
        });
      
    </script>

    <script type="text/javascript">
        
        $.getJSON("<?php echo site_url('home/get_mpro_id');?>", function(mpro_id) {
          showListStaff(mpro_id);
        });
        


        function changeProyek(x) {
            var id=$(x).val();
            //alert('sukses');
           
            $.ajax({
              url : "<?php echo site_url('home/set_mpro_id/');?>"+id,
              method : "POST",
              success: function(mpro_id){
                showListStaff(mpro_id);
              }
            });
        }

        function showListStaff(mpro_id) {
          $.getJSON("<?php echo site_url('proyek/get_list_staff/');?>"+mpro_id, function(dataStaff) {
            //alert(dataStaff);
            var html = '';
            var i; var x;
            for (i=0; i<dataStaff.length; i++) {
              x = i+1; 
              html += 
                '<tr>'+
                  '<td>'+x+'</td>'+
                  '<td>'+dataStaff[i].mpers_nama+'</td>'+
                  '<td>'+dataStaff[i].mpers_jabatan+'</td>'+
                  '<td class="project-actions text-right">'+
                    '<a class="btn btn-info btn-sm" href="<?php echo site_url();?>proyek/edit_staff/'+dataStaff[i].mpers_id+'"><i class="fas fa-pencil-alt"></i></a>'+
                  '</td>'+
                '<tr>';
            }
            $('#dataStaff').html(html);
          });
        }

      
    </script>





    