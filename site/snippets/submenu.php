<?php 

// find the open/active page on the first level
$open  = $pages->findOpen();
$items = ($open) ? $open->children()->visible() : false; 

?>


<?php if($items && $items->count()): ?>
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
<?php endif ?>
