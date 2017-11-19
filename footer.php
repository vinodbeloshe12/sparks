<section id="footer" class="ss-style-invertedrounded">	
		<div class="container">
			<div class="col-lg-12">
				<p class="copyright">&copy; 2014 Sparks Design Solutions 
				
					 by <a href="#">Technfox.com</a> 	
				<!-- up to top -->
				<a href="#"><i class="go-top fa fa-angle-double-up"></i></a>
				</p>
			</div>
		</div> 
	</section>
<!-- SCRIPTS -->
<script src="js/jquery.js"></script>			
<script src="js/bootstrap.min.js"></script>
<!--[if lte IE 8]>
	<script src="js/respond.min.js"></script>
<![endif]-->
<script src="js/retina.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<!--<script type="text/javascript" src="js/scripts.js"></script>--> <!--live chat will effected by this script-->
<script type="text/javascript" src="js/jquery.appear.js"></script>

<!-- SLIDER  SETTINGS -->
<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
	<script type="text/javascript">
	//<![CDATA[
		var revapi;
			jQuery(document).ready(function() {
				revapi = jQuery('.tp-banner').revolution(
				{
					delay:9000,
					startwidth:1393,
					startheight:440,
					fullWidth:"on",
					touchenabled:"on",
					onHoverStop:"on",
					dottedOverlay:"twoxtwo"
				});
			});	
		//]]>
		</script>

<!-- CLIENTS CAROUSEL -->
<script src="js/owl.carousel.min.js"></script>
	<script>
	//<![CDATA[
	$(document).ready(function() {
    $("#clients").owlCarousel({
    autoPlay: 3000, //Set AutoPlay to 3 seconds
    items : 4,
    itemsDesktop : [1199,3],
    itemsDesktopSmall : [979,3]
    });
});
//]]>
</script>

<!-- Media Boxes JS files -->
	<script src="plugin/js/jquery.isotope.min.js"></script>
	<script src="plugin/js/jquery.imagesLoaded.min.js"></script>
	<script src="plugin/js/jquery.transit.min.js"></script>
	<script src="plugin/js/jquery.easing.js"></script>
	<script src="plugin/js/waypoints.min.js"></script>
	<script src="plugin/js/modernizr.custom.min.js"></script>
	<script src="plugin/js/jquery.magnific-popup.min.js"></script>
	<script src="plugin/js/jquery.mediaBoxes.js"></script>
<script>
//<![CDATA[
	$('#work1').mediaBoxes({
		filterContainer: '#filter',
		overlayEffect: 'direction-aware',
		boxesToLoadStart: 150,
		horizontalSpaceBetweenBoxes: 5,
		verticalSpaceBetweenBoxes: 5,
		columns: 5,
	    }); 
//]]>
</script>
<script type="text/javascript" src="js/colorpicker.js"></script>
</body>

</html>
