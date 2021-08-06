
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/ArchitectUI/assets/scripts/main.87c0748b313a1dda75f5.js"></script>


<script type="text/javascript">
	$(document).ready(function () {
        var url = window.location;
        $('ul.vertical-nav-menu a[href="'+ url +'"]').parent().addClass('mm-active');
        $('ul.vertical-nav-menu a').filter(function() {return this.href == url;}).addClass('mm-active');
	});
</script>



