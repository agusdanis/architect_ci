    <!-- WINDOW MODAL TAMBAH LAPORAN MAN POWER -->
    <div class="modal fade" id="modalAddLaporan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- HEADER -->
          <div class="modal-header">
            <h4 class="modal-title">Laporan man power</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
                
          <div class="modal-body">
            <table width="100%" id="tabel_manpower" class="table-sm  table-striped responsive">
              <thead>
                <th width='50%'>Nama Subkon</th>
                <th width='20%'>Man Power</th>
              </thead>
              <tbody id="dataManPower">
                
                <?php if ($subkon) { 
                  foreach ($subkon as $value) {
                  echo '<tr>';
                  echo '<td><input type="hidden" name="msub_id" id="msub_id" value="'.$value->msubpro_msub_id.'">'.$value->msubpro_nama_subkon.'</td>';
                  echo '<td><input type="number" class="form-control"></td>';
                  echo '</tr>';
                } } ; ?>
                      
              </tbody>
            </table>
          </div>
          <div class="modal-footer justify-content-between">
            <a href="#" class="btn btn-default" data-dismiss="modal">Batal</a>
            <!--<input name="add_manpower" id="add_manpower" type="submit" class="btn btn-primary" value="SIMPAN">-->
            <button type="button" class="btn btn-add-manpower btn-primary" data-dismiss="modal">Simpan</button>

          </div>
        </div>
      </div>
    </div>  
  </div>  <!-- ## Page-Wrapper  -->
  <!-- WINDOW MODAL EDIT INVOICE -->