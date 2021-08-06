	<!-- WINDOW MODAL ADD STAFF -->
    <div class="modal fade" id="modalAddSubkon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">TAMBAH SUBKON</h4>
	              	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                	<span aria-hidden="true">&times;</span>
	              	</button>
                </div>
                <!-- end modal-header -->
				<form action="<?php echo site_url('proyek/add_subkon_proyek'); ?>" method="post">
	                <div class="modal-body">
				    	<div class="row">
							
							<div class='form-group col-md-6'>
								<label class='control-label' >Subkon</label>
			                    <select class="form-control" style="width: 100%;" id="add_pilihSubkonId" onchange="add_Subkonchange(this)">
									<option value="null">-- pilih nama --</option>
								<?php foreach ($subkon as $sub) { ?>
									<option value="<?php echo $sub->msub_id; ?>"><?php echo $sub->msub_nama_subkon; ?></option>
								<?php } ?>
								</select>
											
								<input type='hidden' name='add_SubkonId' id='add_SubkonId' value = ''>
								<input type='hidden' name='add_SubkonNama' id='add_SubkonNama' value = ''>
							</div>
							<!--
							<div class='form-group col-md-6'>
								<label class='control-label' >Jabatan</label>
								<select class="form-control" name="add_pilihJabatan" id="add_pilihJabatan" onchange="add_Jabatanchange(this)">
									<option value="0">-- pilih jabatan --</option>
									<option value="1"><?php echo $jabatan[0]; ?></option>
									<option value="2"><?php echo $jabatan[1]; ?></option>
									<option value="3"><?php echo $jabatan[2]; ?></option>
								
								</select>
		                    	<input type='hidden' class='form-control' name='add_Jabatan' id='add_Jabatan' placeholder='' value="">
							</div>
							-->
					    </div>
        			</div>
            		<div class="modal-footer">
						<a href="#" class="btn btn-default" data-dismiss="modal">Batal</a>
						<input name="submit" id="submit" type="submit" class="btn btn-primary" value="SIMPAN">
					</div>
				</form>
            </div>
        </div>
    </div>  <!-- Window Modal AddInvoice -->


    <script type="text/javascript">
        /*
        function add_Jabatanchange(x) {
        	var jabatan = $("#add_pilihJabatan>option:selected").html();
        	document.getElementById('add_Jabatan').value = jabatan;
        }
		*/

        function add_Subkonchange(x) {
        	var sub_id = $(x).val();
        	var nama = $("#add_pilihSubkonId>option:selected").html();
        	document.getElementById('add_SubkonId').value = sub_id;
        	document.getElementById('add_SubkonNama').value = nama;
        }
    </script>