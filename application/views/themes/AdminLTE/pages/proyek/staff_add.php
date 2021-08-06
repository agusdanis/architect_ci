	<!-- WINDOW MODAL ADD STAFF -->
    <div class="modal fade" id="modalAddStaff" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">TAMBAH STAFF</h4>
	              	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                	<span aria-hidden="true">&times;</span>
	              	</button>
                </div>
                <!-- end modal-header -->
				<form action="<?php echo site_url('proyek/add_staff_proyek'); ?>" method="post">
	                <div class="modal-body">
				    	<div class="row">
							
							<div class='form-group col-md-6'>
								<label class='control-label' >Staff</label>
			                    <select class="form-control  select2bs4" style="width: 100%;" id="add_pilihStaffId" onchange="add_Staffchange(this)">
									<option value="null">-- pilih nama --</option>
								<?php foreach ($person as $prs) { ?>
									<option value="<?php echo $prs->usr_id; ?>"><?php echo $prs->usr_namalengkap; ?></option>
								<?php } ?>
								</select>
											
								<input type='hidden' name='add_StaffId' id='add_StaffId' value = ''>
								<input type='hidden' name='add_StaffNama' id='add_StaffNama' value = ''>
							</div>
							<!--
							<div class='form-group col-md-6'>
								<label class='control-label' >Nama</label>
		                    	<input type='text' class='form-control' name='add_nama_staff' id='add_nama_staff' placeholder='' value="">
							</div>
							-->
							<div class='form-group col-md-6'>
								<label class='control-label' >Jabatan</label>
								<select class="form-control select2bs4" style="width: 100%;" name="add_pilihJabatan" id="add_pilihJabatan" onchange="add_Jabatanchange(this)">
									<option value="0">-- pilih jabatan --</option>
									<option value="1"><?php echo $jabatan[0]; ?></option>
									<option value="2"><?php echo $jabatan[1]; ?></option>
									<option value="3"><?php echo $jabatan[2]; ?></option>
									<option value="4"><?php echo $jabatan[3]; ?></option>
								
								</select>
		                    	<input type='hidden' class='form-control' name='add_Jabatan' id='add_Jabatan' placeholder='' value="">
							</div>
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
        function add_Jabatanchange(x) {
        	//var sel = document.getElementById('pilihServer');
        	var jabatan = $("#add_pilihJabatan>option:selected").html();
        	document.getElementById('add_Jabatan').value = jabatan;
        }

        function add_Staffchange(x) {
        	var kary_id = $(x).val();
        	var nama = $("#add_pilihStaffId>option:selected").html();
        	document.getElementById('add_StaffId').value = kary_id;
        	document.getElementById('add_StaffNama').value = nama;
        }
    </script>