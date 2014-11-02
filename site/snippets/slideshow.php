
<?php $p = $page; ?>
<?php if ($p->hasImages()): ?>
			<?php 
			$active = "active";
			foreach($p->images() AS $image): ?>
 				  	<?php echo thumb($image, array('width' => 1920, 'height' => 1280, 'crop' => true )); ?>
			<?php 
			$active = "";
			endforeach ?>
	  </div>

<?php endif ?>