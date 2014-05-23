<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui-1.10.4.custom.min.js"></script>
<script src="js/jquery.ui.datepicker-es.min.js"></script>
<script src="source/jquery.fancybox.js"></script>

<script type="text/javascript" src="js/validate/jquery.validate.js"></script>
<script type="text/javascript" src="js/validate/jquery.metadata.js"></script>
<script type="text/javascript" src="js/validate/messages_es.js"></script>


<!--Eslider-->
<script src="js/modernizr.js" type="text/javascript" charset="utf-8"></script> 
<script src="js/cute/cute.slider.js" type="text/javascript" charset="utf-8"></script> 
<script src="js/cute/cute.transitions.all.js" type="text/javascript" charset="utf-8"></script> 
<script src="js/respond.min.js" type="text/javascript" charset="utf-8"></script> 
<script>
    var myslider = new Cute.Slider();
    myslider.setup("my-cute-slider" , "wrapper");
</script> 
<!--End Eslider-->


<script type="text/javascript" src="menuElegante/js/google.js"></script>
<script type="text/javascript">
$(function(){
	$().maps();
});
</script>



<script type="text/javascript">
$(function() {
	$("#fancyBox").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '90%',
		height		: '90%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});

</script>



<script type="text/javascript">
$(function() {
	$( "#fecha" ).datepicker({
			showButtonPanel: false
	});
});
</script>


