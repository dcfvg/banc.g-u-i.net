<?php snippet('header') ?>

	<div class="row">

		<div class="col-sm-3 gallerie">
			<h6>about</h6>
	    <?php echo kirbytext($page->text()) ?>
			<?php if($page->hasImages()): ?>
			  <?php foreach($page->images() as $image): ?>
			   	<?php echo thumb($image, array('width' => 900)); ?>
				<p><small><?php echo kirbytext($image->caption()) ?></small></p>
			  <?php endforeach ?>
			<?php endif ?>
		</div>
		<div class="col-sm-8 gallerie">
			<h6>dispositifs</h6>
			
			
			<?php $items = $pages->visible()  ?>
			<?php $i = 0?>
			<?php foreach($items AS $item): ?>

				<div class="col-sm-4">
			    <a<?php echo ($item->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $item->url() ?>">		
						<?php if($item->hasImages()): ?>
						   	<?php echo thumb($item->images()->first(), array('width' => 900)); ?>
						<?php endif ?>
						<?php echo html($item->title()) ?>
					</a>
					<hr>
				</div>

	    <?php endforeach ?>
		</div>
	</div>

</section>

<?php snippet('footer') ?>
  </body>
</html>