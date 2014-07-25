		<footer id="footer">
			<p><?php echo kirbytext($site->copyright()) ?></p>
		</footer>
	</div> <!-- end .container-->

  <?php snippet('dev') ?>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <?php echo js('assets/javascript/jquery-2.1.1.min.js') ?>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <?php echo js('assets/libraries/bootstrap/dist/js/bootstrap.min.js') ?>

</body>
</html>