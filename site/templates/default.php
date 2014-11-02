<?php snippet('header') ?>

	<div id="content" class="col-sm-offset-2 col-sm-10">
		<?= kirbytext($page->text()) ?>
		<?php snippet('slideshow') ?>
	</div>

<?php snippet('footer') ?>