    <!-- WINDOW MODAL TAMBAH LAPORAN MAN POWER -->
    <div class="modal fade" id="modalAddSPK" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- HEADER -->
          <div class="modal-header">
            <h4 class="modal-title">Tambah SPK</h4>
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
                  <label for="inputNoSPK">No. SPK</label>
                  <input type="text" class="form-control" name="inputNoSPK" id="inputNoSPK" placeholder="Nomor SPK" onkeyup="<?php echo $onkeyup; ?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputTanggal">Tanggal SPK</label>
                  <input type="date" class="form-control" name="inputTanggal" id="inputTanggal" placeholder="Tanggal SPK">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputLokasi">Lantai/Lokasi</label>
                  <input type="text" class="form-control" name="inputLokasi" id="inputLokasi" placeholder="Lantai / lokasi" onkeyup="<?php echo $onkeyup; ?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputBudgetUpah">Budget Upah</label>
                  <input type="text" class="form-control" style="text-align: right" name="inputBudgetUpah" id="inputBudgetUpah" placeholder="Budget upah">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputBudgetTD">Budget TD</label>
                  <input type="text" class="form-control" style="text-align: right" name="inputBudgetTD" id="inputBudgetTD" placeholder="Budget TD">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputNilaiSPK">Nilai SPK</label>
                  <input type="text" class="form-control" style="text-align: right" name="inputNilaiSPK" id="inputNilaiSPK" placeholder="Nilai SPK">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputRealisasi">Realisasi Pembayaran</label>
                  <input type="text" class="form-control" style="text-align: right" name="inputRealisasi" id="inputRealisasi" placeholder="Dibayar">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputRealisasi">Subkon/pelaksana</label>
                  <div id="listSubkon" class="form-group"></div>
                  <input type="hidden" name="inputSubId" id="inputSubId">
                </div>
                  
                
                <div class="form-group col-md-12">
                  <label for="inputKeterangan">Keterangan</label>
                  <textarea class="form-control" name="inputKeterangan" id="inputKeterangan" placeholder="Keterangan"></textarea>
                </div>
                </div>
          </div>
          <div class="modal-footer justify-content-between">
            <a href="#" class="btn btn-default" data-dismiss="modal">Batal</a>
            <!--<input name="add_manpower" id="add_manpower" type="submit" class="btn btn-primary" value="SIMPAN">-->
            <button type="button" class="btn btn-add-simpan btn-primary" data-dismiss="modal">Simpan</button>

          </div>
          </form>
        </div>
      </div>
    </div>  
  </div>  <!-- ## Page-Wrapper  -->
  <!-- WINDOW MODAL EDIT INVOICE -->

  <script type="text/javascript">
    
    fillSelectSubkon();
    function fillSelectSubkon(){
        $.getJSON("<?php echo site_url('home/list_subkon');?>", function(listSubkon) {
          //showListRap(mpro_id);
          //console.log(listSubkon);

          var html = '';
          var i;
          html +=
            '<select id="namaSubkon" class="form-control select2bs4" style="width: 100%;" onchange="changeSubkon(this)">';
              for (i=0; i<listSubkon.length; i++) {
                html +=    
                    '<option value="'+listSubkon[i].msub_id+'">'+
                      listSubkon[i].msub_nama_subkon+
                    '</option>';
              }
          html += '</select>';
          $('#listSubkon').html(html);  
        });
    }

    function changeSubkon(x) {
      var id=$(x).val();
      //alert(id);
      document.getElementById('inputSubId').value = id; 
      //var dipilih = $('#namaSubkon option:selected').html();
      //alert(dipilih);
    }

    

  </script>

  <script type="text/javascript">
    document.getElementById('inputTanggal').valueAsDate = new Date();
    $(document).ready(function() {
      
      $('.btn-add-simpan').click(function (e) {
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
            //'tspk_mpro_id'      : document.getElementById('tbudqsh0_mpro_id').value,
            'tspk_id'           : 0,
            'tspk_msub_id'      : document.getElementById('inputSubId').value,
            'tspk_lokasi'       : document.getElementById('inputLokasi').value,
            'tspk_nomor'        : document.getElementById('inputNoSPK').value,
            'tspk_nilaispk'     : document.getElementById('inputNilaiSPK').value,
            'tspk_budgetupah'   : document.getElementById('inputBudgetUpah').value,
            'tspk_budgettd'     : document.getElementById('inputBudgetTD').value,
            'tspk_realisasi'    : document.getElementById('inputRealisasi').value,
            'tspk_namasubkon'   : $('#namaSubkon option:selected').html(),
            'tspk_keterangan'   : document.getElementById('inputKeterangan').value,
            'tspk_tanggal'      : document.getElementById('inputTanggal').value
        };
        var jsonHeader = JSON.stringify(headerSPK);
        //return jsonHeader;
        //console.log(jsonHeader);
        if (jsonHeader) {
          $.ajax({
            url : "<?php echo site_url('proyek/saveSPK');?>",
            method : "POST",
            data : {dataHeadSPK: jsonHeader},
            success: function(data){
              //alert(data);
              //console.log(data);
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