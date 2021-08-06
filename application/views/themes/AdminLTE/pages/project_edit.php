

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            
            <div class="card-header">
              <h3 class="card-title">Data Proyek</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>

            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Kode & Nama Proyek</label>
                <div class="input-group">
                  <input type="text" id="inputKode" class="form-control col-sm-2" value="<?php echo $proyek->mpro_kodeproyek;?>">
                  <input type="text" id="inputName" class="form-control" value="Hallo BCA Semarang">
                </div>
              </div>
              <div class="form-group">
                <label for="inputDescription">Alamat proyek</label>
                <textarea id="inputDescription" class="form-control" rows="4"></textarea>
              </div>
              <!--
              <div class="form-group">
                <label for="inputStatus">Status</label>
                <select class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option>On Hold</option>
                  <option>Canceled</option>
                  <option selected>Success</option>
                </select>
              </div>
              -->
              <div class="form-group">
                <label for="inputClientCompany">Pemberi Tugas</label>
                <input type="text" id="inputClientCompany" class="form-control" value="Deveint Inc">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Koordinator Proyek</label>
                <input type="text" id="inputProjectLeader" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Manager Proyek</label>
                <input type="text" id="inputProjectLeader" class="form-control" value="">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Kontrak</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputEstimatedBudget">Nilai Kontrak</label>
                <input type="number" id="inputEstimatedBudget" class="form-control" value="2300" step="1">
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">Total biaya digunakan</label>
                <input type="number" id="inputSpentBudget" class="form-control" value="2000" step="1">
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Tanggal Mulai/Selesai</label>
                <div class="input-group">
                  <input type="date" id="inputTglMulai" class="form-control" value="">
                  <input type="date" id="inputTglSelesai" class="form-control" value="">
                </div>
              </div>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          

          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Pekerjaan</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
           <!-- /.card-body -->
          </div>

          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Save Changes" class="btn btn-success float-right">
        </div>
      </div>
    </section>
    <!-- /.content -->
  
  <script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>