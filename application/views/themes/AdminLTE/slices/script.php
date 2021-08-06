<!-- REQUIRED SCRIPTS -->



<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/AdminLTE/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/AdminLTE/dist/js/demo.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>

<!-- fullCalendar 2.2.5 -->
<!--
<script src="<?php //echo base_url(); ?>assets/AdminLTE/plugins/moment/moment.min.js"></script>
<script src="<?php //echo base_url(); ?>assets/AdminLTE/plugins/fullcalendar/main.min.js"></script>
<script src="<?php //echo base_url(); ?>assets/AdminLTE/plugins/fullcalendar-daygrid/main.min.js"></script>
<script src="<?php //echo base_url(); ?>assets/AdminLTE/plugins/fullcalendar-timegrid/main.min.js"></script>
<script src="<?php //echo base_url(); ?>assets/AdminLTE/plugins/fullcalendar-interaction/main.min.js"></script>
<script src="<?php //echo base_url(); ?>assets/AdminLTE/plugins/fullcalendar-bootstrap/main.min.js"></script>
-->

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/chart.js/Chart.min.js"></script>

<!-- FLOT CHARTS -->
<script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/flot-old/jquery.flot.resize.min.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/flot-old/jquery.flot.pie.min.js"></script>

<!-- PAGE SCRIPTS -->
<!--<script src="<?php echo base_url(); ?>assets/AdminLTE/dist/js/pages/dashboard2.js"></script>-->
<!-- AdminLTE App -->
<!--<script src="<?php echo base_url(); ?>assets/AdminLTE/dist/js/adminlte.min.js"></script>-->
<!-- AdminLTE for demo purposes -->
<!--<script src="<?php echo base_url(); ?>assets/AdminLTE/dist/js/demo.js"></script>-->

<!--
<script type="text/javascript">
  $(document).ready(function(){
    $('#pilihProyek').change(function(){ 
        var id=$(this).val();
        $.ajax({
          url : "<?php //echo site_url('home/set_mpro_id/');?>"+id,
          method : "POST",
          success: function(data){}
        });
    }); 
  });
</script>
-->

<script>

  function number_format(number, decimals, decPoint, thousandsSep){
          decimals = decimals || 0;
          number = parseFloat(number);

          if(!decPoint || !thousandsSep){
              decPoint = '.';
              thousandsSep = ',';
          }

          var roundedNumber = Math.round( Math.abs( number ) * ('1e' + decimals) ) + '';
          var numbersString = decimals ? roundedNumber.slice(0, decimals * -1) : roundedNumber;
          var decimalsString = decimals ? roundedNumber.slice(decimals * -1) : '';
          var formattedNumber = "";

          while(numbersString.length > 3){
              formattedNumber = thousandsSep + numbersString.slice(-3) + formattedNumber;
              numbersString = numbersString.slice(0,-3);
          }

          return (number < 0 ? '-' : '') + numbersString + formattedNumber + (decimalsString ? (decPoint + decimalsString) : '');
        }
        
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
    $('#rangetanggal').daterangepicker(
      {
            startDate: moment().subtract('days', 14),
            endDate: moment(),
            minDate: '01/01/2015',
            maxDate: '12/31/2100',
            dateLimit: { days: 10000 },
            showDropdowns: true,
            showWeekNumbers: true,
            timePicker: false,
            timePickerIncrement: 1,
            timePicker12Hour: true,
            ranges: {
               'Hari ini': [moment(), moment()],
               'Kemaren': [moment().subtract('days', 1), moment().subtract('days', 1)],
               '7 hari Lalu': [moment().subtract('days', 6), moment()],
               '30 hari Lalu': [moment().subtract('days', 29), moment()],
               'Bulan Ini': [moment().startOf('month'), moment().endOf('month')],
               'Bulan Lalu': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
            },
            opens: 'left',
            buttonClasses: ['btn btn-default'],
            applyClass: 'btn-small btn-primary',
            cancelClass: 'btn-small',
            
            separator: ' to ',
            locale: {
                applyLabel: 'Simpan',
                format: 'DD-MM-YYYY',
                fromLabel: 'Dari',
                toLabel: 'Sampai',
                customRangeLabel: 'Pilih bebas',
                daysOfWeek: ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum','Sab'],
                monthNames: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                firstDay: 1
            }
          },
          function(start, end) {
            //console.log("Callback has been called!");
            $('#rangetanggal span').html(start.format('D MMMM YYYY') + ' - ' + end.format('D MMMM YYYY'));
            startDate = start;
             endDate = end;    
            //console.log(startDate+'-'+endDate);
          }
        );

    $('#rangetanggal span').html(moment().subtract('days', 14).format('D MMMM YYYY') + ' - ' + moment().format('D MMMM YYYY'));

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

