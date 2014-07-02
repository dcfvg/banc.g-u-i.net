		<div class="footer">
			<p><?php echo kirbytext($site->copyright()) ?></p>
		</div>		  
	</div> <!-- end container-->

	<?php echo js('assets/js/jquery-1.11.1.min.js') ?>
	<?php echo js('assets/js/isotope.pkgd.min.js') ?>
	<?php echo js('assets/bootstrap/bootstrap.min.js') ?>
	<script type="text/javascript" charset="utf-8" >
		var $container = $('#gridContainer');
		// init
		$container.isotope({
		  // options
		  itemSelector: '.item',
		  layoutMode: 'fitRows'
		});
	
	</script>
</body>

</html>