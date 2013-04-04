	
		<footer>
			&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?>
			<ul>
			 	<li><a href="terms-and-conditions" alt="Terms and Conditions">Terms & Conditions</a><li>
				<li><a href="contact" alt="Contact Taxi Hero">Contact</a></li>
			<ul>
		</footer>

	</div>

	<?php wp_footer(); ?>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
	
	<?php if (is_page(48)) : // How it Works page with Slideshow ?> 
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.slides.js"></script>
	<script>
	    $(function() {
	      $('#slides').slidesjs({
	        width: 500,
	        height: 430
	      });
	    });
  	</script>
	<?php endif; ?>
	
	<script type="text/javascript">
	$(document).ready(function() {
		$('li.pagenav a').hover(
		    function() {
		        $(this).animate({ backgroundColor: "#9d9c9c" }, "fast");
		    }, 
		    function() {
		        $(this).animate({ backgroundColor: "#828282" }, "fast");
		    });
	});
	</script>
	
	<!-- Don't forget analytics -->
	
</body>

</html>
