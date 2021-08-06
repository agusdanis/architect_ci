    <!-- WINDOW MODAL TAMBAH LAPORAN MAN POWER -->
    <div class="modal fade" id="modalEditSPK" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- HEADER -->
          <div class="modal-header">
            <h4 class="modal-title">Edit SPK</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form role="form" action="<?php echo site_url('admin/add_subkon'); ?>" method="post">   
            <?php 
                $onkeyup = "var start = this.selectionStart;
                        var end = this.selectionEnd;
                        this.value = this.value.toUpperCase();
                        this.setSelectionRange(start, end);"; ?>

          <div class="modal-body">
                <div class="row">
                <div class="form-group col-md-6">
                  <label for="editNoSPK">No. SPK</label>
                  <input type="text" class="form-control" name="editNoSPK" id="editNoSPK" placeholder="Nomor SPK" onkeyup="<?php echo $onkeyup; ?>">
                  <input type="hidden" id="editIdSPK">
                </div>
                <div class="form-group col-md-6">
                  <label for="editTanggal">Tanggal SPK</label>
                  <input type="date" class="form-control" name="editTanggal" id="editTanggal" placeholder="Tanggal SPK">
                </div>
                <div class="form-group col-md-6">
                  <label for="editPekerjaan">Pekerjaan</label>
                  <input type="text" class="form-control" name="editPekerjaan" id="editPekerjaan" placeholder="Pekerjaan" onkeyup="<?php echo $onkeyup; ?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="editLokasi">Lantai/Lokasi</label>
                  <input type="text" class="form-control" name="editLokasi" id="editLokasi" placeholder="Lantai / lokasi" onkeyup="<?php echo $onkeyup; ?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="editBudgetUpah">Budget Upah</label>
                  <input type="text" class="form-control" style="text-align: right" name="editBudgetUpah" id="editBudgetUpah" placeholder="Budget upah">
                </div>
                <div class="form-group col-md-6">
                  <label for="editBudgetTD">Budget TD</label>
                  <input type="text" class="form-control" style="text-align: right" name="editBudgetTD" id="editBudgetTD" placeholder="Budget TD">
                </div>
                <div class="form-group col-md-6">
                  <label for="editNilaiSPK">Nilai SPK</label>
                  <input type="text" class="form-control" style="text-align: right" name="editNilaiSPK" id="editNilaiSPK" placeholder="Nilai SPK">
                </div>
                <div class="form-group col-md-6">
                  <label for="editRealisasi">Realisasi Pembayaran</label>
                  <input type="text" class="form-control" style="text-align: right" name="editRealisasi" id="editRealisasi" placeholder="Dibayar">
                </div>
                <div class="form-group col-md-6">
                  <label for="listeditSubkon">Subkon/pelaksana</label>
                  <div id="listeditSubkon" class="form-group"></div>
                  <input type="hidden" name="editSubId" id="editSubId">
                </div>
                  
                
                <div class="form-group col-md-12">
                  <label for="editKeterangan">Keterangan</label>
                  <textarea class="form-control" name="editKeterangan" id="editKeterangan" placeholder="Keterangan"></textarea>
                </div>
                </div>
          </div>
          <div class="modal-footer justify-content-between">
            <a href="#" class="btn btn-default" data-dismiss="modal">Batal</a>
            <!--<input name="add_manpower" id="add_manpower" type="submit" class="btn btn-primary" value="SIMPAN">-->
            <button type="button" class="btn btn-edit-simpan btn-primary" data-dismiss="modal">Simpan</button>

          </div>
          </form>
        </div>
      </div>
    </div>  
  </div>  <!-- ## Page-Wrapper  -->
  <!-- WINDOW MODAL EDIT INVOICE -->

  <script type="text/javascript">
    function changeSubkon(x) {
      var id=$(x).val();
      document.getElementById('editSubId').value = id; 
      //var dipilih = $('#namaSubkon option:selected').html();
      //alert(dipilih);
    }
  </script>

  <script type="text/javascript">
    //document.getElementById('editTanggal').valueAsDate = new Date();
    $(document).ready(function() {
      
      $('.btn-edit-simpan').click(function (e) {
        //alert('Okay boss');
        if (confirm("Yakin data sudah benar ?") == true) {
          simpanDataSPK();
        } else {
          alert('Data tidak disimpan !');
        }
      });

      function simpanDataSPK() {
        var headerSPK = new Array();
        headerSPK[0] = {
            'tspk_id'           : document.getElementById('editIdSPK').value,
            'tspk_msub_id'      : document.getElementById('editSubId').value,
            'tspk_lokasi'       : document.getElementById('editLokasi').value,
            'tspk_nomor'        : document.getElementById('editNoSPK').value,
            'tspk_pekerjaan'    : document.getElementById('editPekerjaan').value,
            'tspk_nilaispk'     : document.getElementById('editNilaiSPK').value,
            'tspk_budgetupah'   : document.getElementById('editBudgetUpah').value,
            'tspk_budgettd'     : document.getElementById('editBudgetTD').value,
            'tspk_realisasi'    : document.getElementById('editRealisasi').value,
            'tspk_namasubkon'   : $('#editSubkon option:selected').html(),
            'tspk_keterangan'   : document.getElementById('editKeterangan').value,
            'tspk_tanggal'      : document.getElementById('editTanggal').value
        };
        var jsonHeader = JSON.stringify(headerSPK);
        if (jsonHeader) {
          $.ajax({
            url : "<?php echo site_url('proyek/saveSPK');?>",
            method : "POST",
            data : {dataHeadSPK: jsonHeader},
            success: function(data){
              //console.log(JSON.parse(data).mpro_id);
              showListSPK(JSON.parse(data).mpro_id);
            },
            error : function(request, status, error) {
              alert(error);
            } 
          });
        }
      }
    });
  </script>