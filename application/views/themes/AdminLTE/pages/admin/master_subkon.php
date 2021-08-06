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
          <h3 id="card-title" class="card-title">MASTER SUBKON</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        
        <div class="card-body table-responsive p-2" style="height: 580px;">
            <div class="row">
              
              <div align="right" class="col-md-12">
                <button class="btn btn-primary btn-add-subkon"><i class="fas fa-plus-circle"></i> Tambah</button>
                <!--
                <a href="javascript:void(0)" class="btn btn-simpan btn-primary" title ="Simpan" data-toggle="tooltip">
                  <i class="glyphicon glyphicon-ok"></i>    Simpan
                </a>
              -->
              </div>

            </div>
          
          
          <table id="tabelSubkon" width="100%" class="table table-striped table-hover table-responsive">
              <thead>
                  <tr>
                      <th class="th-sm" style="width: 5%">
                          #
                      </th>
                      <th style="width: 30%">
                          Nama Subkon
                      </th>
                      <th style="width: 15%">
                          Pekerjaan 
                      </th>
                      <th style="width: 10%">
                          No. Telp/HP
                      </th>
                      <th style="width: 30%">
                          Alamat
                      </th>
                      <th style="width: 10%">

                      </th>
                  </tr>
              </thead>
              <tbody id="dataSubkon">
                <!--
                <?php if ($subkon) {
                    $no = 0;
                    foreach ($subkon as $datasub) {
                  ?>    
                <tr>
                  <?php $no++ ?>
                  <td><?php echo $no;?></td>
                  <td><?php echo $datasub->msub_nama_subkon;?></td>
                  <td><?php echo $datasub->msub_spesialis;?></td>
                  <td><?php echo $datasub->msub_hp;?></td>
                  <td><?php echo $datasub->msub_alamat;?></td>
                  <td class="text-right">
                    <button class="btn btn-danger btn-del-subkon btn-sm" data-id="<?php echo $datasub->msub_id;?>">
                      <i class="fas fa-minus-circle"></i>
                    </button>
                  </td>
                </tr>
                <?php } } ?>
                  
                  -->
                
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->

    <script type="text/javascript"> 

      $(document).ready(function () {
        $('.btn-del-subkon').click(function () {
          //alert('Maaf, belum bisa ya.');
          var id = $(this).attr("data-id");
          //var id = $(x).val();
          if (confirm("Yakin data akan dihapus ?") == true) { // jika simpan dikonfirmasi OK
            $(this).closest("tr").remove();
            hapusDataSubkon(id);
          } else {
            alert('Perintah dibatalkan !');
          }
        });
      });
      
      fillTableSubkon();

      $('.btn-add-subkon').click(function (e) {
        e.preventDefault();
        $('#modalAddSubkon').modal('show');
      });

      

      function hapusDataSubkon(id) {
        //alert('Okay boss: '+id) ;
        
        $.ajax({
          url : "<?php echo site_url('admin/del_subkon/');?>"+id,
          method : "POST",
          //data : {dataManPower: jsonManPower},
          success: function(data){
            alert('Data berhasil dihapus !');
          },
          error : function(request, status, error) {
            alert(error);
          }
        });
      }

      function fillTableSubkon() {
        $.getJSON("<?php echo site_url('admin/get_dataSubkon/');?>", function(dataSubkon) {
          //alert(dataSubkon);
          var html = '';
          var i;
          var no;
          for (i=0; i<dataSubkon.length; i++) {
            no = i+1;
            html += 
              '<tr>'+
                '<td>'+no+'</td>'+
                '<td>'+dataSubkon[i].msub_nama_subkon+
                //'<br>'+'<input id="msub_id" type="hidden" value="'+dataSubkon[i].msub_id+'"">'+
                //'<input id="ttpsh1_id" type="hidden" value="'+dataSubkon[i].ttpsh1_id+'"">'+
                '</td>'+
                //'<td style="text-align: right">'+data[i].ttpsh0_manpower+' org</td>'+
                '<td>'+dataSubkon[i].msub_spesialis+'</td>'+
                '<td>'+dataSubkon[i].msub_hp+'</td>'+
                '<td>'+dataSubkon[i].msub_alamat+'</td>'+
                
                '<td class="text-right">'+
                    '<button class="btn btn-success btn-edit-subkon btn-sm" onclick="edit_subkon(this)" data-id="'+dataSubkon[i].msub_id+'">'+
                      '<i class="fas fa-pencil-alt"></i>'+
                    '</button>'+
                '</td>'+
                
                '<td class="text-right">'+
                    '<button class="btn btn-danger btn-del-subkon btn-sm" onclick="del_subkon(this)" data-id="'+dataSubkon[i].msub_id+'">'+
                      '<i class="fas fa-minus-circle"></i>'+
                    '</button>'+
                '</td>'+
              '</tr>';
          }
          $('#dataSubkon').html(html);
        });
      }
      
      function edit_subkon(x) {
        var id = $(x).attr("data-id");
        //alert(id);
        $.getJSON("<?php echo site_url('admin/form_editSubkon/');?>"+id, function(dataSubkon) {
          //alert(dataSubkon[0].msub_alamat);
          $('#modalEditSubkon').modal('show');
          // isi data modal
          document.getElementById("msub_id").value = dataSubkon[0].msub_id;
          document.getElementById("editNamaSubkon").value = dataSubkon[0].msub_nama_subkon;
          document.getElementById("editPekerjaan").value = dataSubkon[0].msub_pekerjaan;
          document.getElementById("editNoHP").value = dataSubkon[0].msub_hp;
          document.getElementById("editAlamat").value = dataSubkon[0].msub_alamat;
        });
      }

      function del_subkon(x) {
        //alert('Maaf, belum bisa .');
        var id = $(x).attr("data-id");
        if (confirm("Yakin data akan dihapus ?") == true) { // jika simpan dikonfirmasi OK
          $(x).closest("tr").remove();
          hapusDataSubkon(id);
        } else {
          //alert('Perintah dibatalkan !');
        }
      }
    </script>