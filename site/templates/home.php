	<?php snippet('header') ?>

	<div id="collections" class="row">
			<? $collections = $pages->visible() ?>
			<? foreach ($collections as $collection): ?>
					<a class="col-sm-2 btn btn-lg" 
						href="<?= $collection->url() ?>" 
						data-toggle="tooltip" 
						data-placement="bottom" 
						title="<?= $collection->subtitle() ?>" 
					  data-original-title="<?= $collection->subtitle() ?>"
						>

						<?= $collection->title() ?></a><br/>
			<? endforeach ?>

	</div>

	<div class="col-sm-offset-2 col-sm-10" id="content">
		<?= kirbytext($page->text()) ?>
	</div>
<?php snippet('footer') ?>