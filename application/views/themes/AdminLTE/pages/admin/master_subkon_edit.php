    <!-- WINDOW MODAL TAMBAH LAPORAN MAN POWER -->
    <div class="modal fade" id="modalEditSubkon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- HEADER -->
          <div class="modal-header">
            <h4 class="modal-title">Edit data subkon</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form role="form" action="<?php echo site_url('admin/edit_Subkon'); ?>" method="post">   
            <?php 
                $onkeyup = "var start = this.selectionStart;
                        var end = this.selectionEnd;
                        this.value = this.value.toUpperCase();
                        this.setSelectionRange(start, end);"; ?>

            <div class="modal-body">
              
                <div class="form-group">
                  <label for="editNamaSubkon">Nama subkon</label>
                  <input type="text" class="form-control" name="editNamaSubkon" id="editNamaSubkon" placeholder="Nama subkon" onkeyup="<?php echo $onkeyup; ?>">
                  <input type="hidden" class="form-control" name="msub_id" id="msub_id">
                </div>
                <div class="form-group">
                  <label for="editPekerjaan">Pekerjaan</label>
                  <input type="text" class="form-control" name="editPekerjaan" id="editPekerjaan" placeholder="Pekerjaan" onkeyup="<?php echo $onkeyup; ?>">
                </div>
                <div class="form-group">
                  <label for="editNoHP">No. HP</label>
                  <input type="text" class="form-control" name="editNoHP" id="editNoHP" placeholder="No. HP">
                </div>
                <div class="form-group">
                  <label for="editAlamat">Alamat</label>
                  <textarea class="form-control" name="editAlamat" id="editAlamat" placeholder="Alamat"></textarea>
                </div>
              
            </div>

            <div class="modal-footer justify-content-between">
              <a href="#" class="btn btn-batal btn-default" data-dismiss="modal">Batal</a>
              <!--<input name="add_manpower" id="add_manpower" type="submit" class="btn btn-primary" value="SIMPAN">-->
              <button type="submit" class="btn btn-simpan btn-primary" onclick="return confirm('Yakin data akan disimpan ?')">Simpan</button>

            </div>
          </form>
        </div>
      </div>
    </div>  
  </div>  <!-- ## Page-Wrapper  -->
  <!-- WINDOW MODAL EDIT INVOICE -->