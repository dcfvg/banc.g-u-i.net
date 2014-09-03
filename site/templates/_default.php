<?php snippet('header') ?>

	<div class="row">

		<div class="col-sm-7 gallerie">
			<h6>dispositif</h6>
	    <?php echo kirbytext($page->text()) ?>
			<?php if($page->hasImages()): ?>
			  <?php foreach($page->images() as $image): ?>
			   	<?php echo thumb($image, array('width' => 900)); ?>
				<p><small><?php echo kirbytext($image->caption()) ?></small></p>
			  <?php endforeach ?>
			<?php endif ?>
		</div>
		<div class="col-sm-3 gallerie">
			<h6>activations</h6>

			<?php $items = $page->children()->visible()  ?>
			<?php foreach($items AS $item): ?>
				<div class="">

		    <a<?php echo ($item->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $item->url() ?>">
					<?php if($item->hasImages()): ?>
					   	<?php echo thumb($item->images()->first(), array('width' => 900)); ?>
					<?php endif ?>
					<?php echo html($item->title()) ?>
				</a>
				<hr>
	    <?php endforeach ?>
		</div>
	</div>

<?php snippet('footer') ?>