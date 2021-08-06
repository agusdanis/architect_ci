    <?php
      /* 
      if ($satu_proyek) { 
        foreach($satu_proyek as $pro) { 
          $nama_proyek = $pro->mpro_namaproyek;
        }
      } else { $nama_proyek = '';}
      */
    ?>

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
            <h1>SPK SUBKON</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">SPK</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section id="listRap" class="content">
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
          <!--<h3 class="card-title" style="color: blue;"><b>RENCANA ANGGARAN PROYEK</b></h3>-->

          <div class="card-tools">
            <!--
            <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
            -->
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <!--
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
            -->
          </div>
          
        <div class="card-body table-responsive p-0" >
        
          <div class="row">
            <div id="daftarProyek" class="col-md-4">

            </div>

            <div id="tombol" align="right" class="col-md-8">
              <button class="btn btn-primary btn-add-spk"><i class="fas fa-plus-circle"></i> Tambah</button>
            </div>
          </div>
        <!--
          <?php if (count($proyek) > 1) { ?>
          
            <select class="form-control select2bs4" style="width: 100%;" onchange="changeProyek(this)">
              <?php foreach($proyek as $row_proyek) { ?>
                <option value="<?php echo $row_proyek->mpro_id; ?>" <?php if ($row_proyek->mpro_id == $this->session->userdata('mpro_id')) { echo "selected"; }?>>
                  <?php echo $row_proyek->mpro_kodeproyek." ".$row_proyek->mpro_namaproyek; ?></option> ;
              <?php } ?>
            </select>
          </div>
          <?php } ?>
        -->
          <table  id="tabelSPK" class="table-sm table-responsive table-hover" style="font-size: 14px">
          <!--<table  class="table table-hover table-responsive p-2 table-head-fixed">-->
              <thead>
                  
                  <tr>
                      <th style="width: 5%">
                          No.
                      </th>
                      <th style="width: 15%">
                          PEKERJAAN
                      </th>
                      <th style="width: 15%">
                          # SPK<br/>
                          Tanggal
                      </th>
                      <th style="width: 10%">
                          Lantai/Area
                      </th>
                      <th style="width: 10%; font-size: 14px">
                          Budget Upah
                      </th>
                      <th style="width: 10%">
                          Budget TD
                      </th>
                      <th style="width: 10%">
                          Nilai SPK
                      </th>
                      <th style="width: 10%">
                          Realisasi
                      </th>
                      <th style="width: 15%">
                          Pelaksana
                      </th>
                      <th style="width: 15%">
                          Keterangan
                      </th>
                      <th style="width: 5%">

                      </th>
                  </tr>
              </thead>
              <tbody id="dataSPK"> 

              </tbody>
          </table>
        
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->

    <script type="text/javascript">

        $(function() {
          $('.btn-add-spk').click(function (e) {
            e.preventDefault();
            $('#modalAddSPK').modal('show');
            //showListSPK(<?php echo $this->session->userdata('mpro_id');?>);
          });


        })

        function edit_spk(x) {
          var id = $(x).attr("data-id");
          //alert(id);
          $.getJSON("<?php echo site_url('proyek/form_editSPK/');?>"+id, function(dataSPK) {
            //alert(dataSubkon[0].msub_alamat);
            $('#modalEditSPK').modal('show');
            // isi data modal
            document.getElementById("editIdSPK").value = dataSPK[0].tspk_id;
            document.getElementById("editSubId").value = dataSPK[0].tspk_msub_id;
            document.getElementById("editNoSPK").value = dataSPK[0].tspk_nomor;
            document.getElementById("editLokasi").value = dataSPK[0].tspk_lokasi;
            document.getElementById("editPekerjaan").value = dataSPK[0].tspk_pekerjaan;
            document.getElementById("editTanggal").valueAsDate = new Date(dataSPK[0].tspk_tanggal);
            document.getElementById("editRealisasi").value = number_format(dataSPK[0].tspk_realisasi,0);
            document.getElementById("editNilaiSPK").value = number_format(dataSPK[0].tspk_nilaispk,0);
            document.getElementById("editBudgetUpah").value = number_format(dataSPK[0].tspk_budgetupah,0);
            document.getElementById("editBudgetTD").value = number_format(dataSPK[0].tspk_budgettd,0);
            document.getElementById("inputNilaiSPK").value = number_format(dataSPK[0].tspk_nilaispk,0);
          
            // Select subkon 
            $.getJSON("<?php echo site_url('home/list_subkon');?>", function(listSubkon) {
              var html = '';
              var i;
              var sub_id = dataSPK[0].tspk_msub_id;
              //console.log(sub_id);
              //alert(sub_id);
              var dipilih = ''; 
              html +=
                '<select id="editSubkon" class="form-control select2bs4" style="width: 100%;" onchange="changeSubkon(this)">';
                  for (i=0; i<listSubkon.length; i++) {
                    dipilih = listSubkon[i].msub_id == sub_id ? "selected" : "";
                    html +=    
                        '<option value="'+listSubkon[i].msub_id+'" '+dipilih+' >'+
                          listSubkon[i].msub_nama_subkon+
                        '</option>';
                  }
              html += '</select>';
              $('#listeditSubkon').html(html);  
            });

          });
    
        }

        $("#tabelSPK").delegate("tr", "click", function(){
          /*
          var row   = jQuery(this).closest('tr');
          var id    = row.find('td:eq(0) input#rapid').val();   // get ttpsh0_id on cell
          var revno = row.find('td:eq(0) input#revno').val();
          var url="<?php //echo site_url('rap/rap_detail/');?>"+id+"/"+revno;
          window.location = url;
          */
        });

        function changeProyek(x) {
            var id=$(x).val();
            //alert('sukses');
           
            $.ajax({
              url : "<?php echo site_url('home/set_mpro_id/');?>"+id,
              method : "POST",
              success: function(mpro_id){
                showListSPK(mpro_id);
              }
            });
        }

        function showListSPK(mpro_id) {
          $.getJSON("<?php echo site_url('proyek/get_list_spk/');?>"+mpro_id, function(dataSPK) {
            //console.log(dataSPK);

            
            var html = '';
            var i, no;
            //var decimals = 0; var decPoint; var thousandsSep;
            var number;
            no = 0;
            for (i=0; i<dataSPK.length; i++) {

              no = i+1;
              html += 
                '<tr>'+
                  '<td>'+no+'</td>'+
                  '<td>'+dataSPK[i].tspk_pekerjaan+'</td>'+
                  '<td>'+dataSPK[i].tspk_nomor+'<br>'+
                    ''+dataSPK[i].tspk_tanggal+''+
                    '<input type="hidden" id="spk_id" value="'+dataSPK[i].tspk_id+'">'+
                  '</td>'+
                  
                  '<td>'+dataSPK[i].tspk_lokasi+'</td>'+
                  '<td style="text-align: right">'+number_format(dataSPK[i].tspk_budgetupah,0,'.',',')+'</td>'+
                  '<td style="text-align: right">'+number_format(dataSPK[i].tspk_budgettd,0,'.',',')+'</td>'+
                  '<td style="text-align: right">'+number_format(dataSPK[i].tspk_nilaispk,0,'.',',')+'</td>'+
                  '<td style="text-align: right">'+number_format(dataSPK[i].tspk_realisasi,0,'.',',')+'</td>'+
                  '<td>'+dataSPK[i].tspk_namasubkon+'</td>'+
                  '<td>'+dataSPK[i].tspk_keterangan+'</td>'+
                  
                  '<td class="project-actions text-right">'+
                    '<button class="btn btn-info btn-sm" onclick="edit_spk(this)" data-id="'+dataSPK[i].tspk_id+'"><i class="fas fa-pencil-alt"></i></buttons>'+
                  '</td>'+
                  
                '<tr>';
            }
            $('#dataSPK').html(html);
          });
        }

      fillSelectProyek();
      $.getJSON("<?php echo site_url('home/get_mpro_id');?>", function(mpro_id) {
          //showListSPK(mpro_id);
      });


      function fillSelectProyek(){
        $.getJSON("<?php echo site_url('home/list_proyek');?>", function(listProyek) {
          //showListRap(mpro_id);
          //console.log(listProyek);

          var html = '';
          var i;
          html +=
            '<select class="form-control select2bs4" style="width: 100%;" onchange="changeProyek(this)">';
          for (i=0; i<listProyek.length; i++) {
            html +=    
                '<option value="'+listProyek[i].mpro_id+'">'+
                  listProyek[i].mpro_namaproyek+
                  '</option>';
          }
          html += '</select>';
          $('#daftarProyek').html(html);  
        });

      }

    </script>

    <script type="text/javascript">
    $(document).ready(function() {
      $("#cariSesuatu").keyup(function(){
        var searchText = $(this).val().toLowerCase();
        // Show only matching TR, hide rest of them
        $.each($("#tabelSPK tbody tr"), function() {
          if($(this).text().toLowerCase().indexOf(searchText) === -1)
            $(this).hide();
          else
            $(this).show();                
        });
      });
    });
  </script>
    



    