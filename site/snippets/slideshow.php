
<?php $p = $page; ?>
<?php if ($p->hasImages()): ?>
			<?php 
			$active = "active";
			foreach($p->images() AS $image): ?>
 				  	
 				  	<a data-toggle="tooltip" data-placement="left"  data-original-title="<?=$image->caption(); ?>" href="#">
 				  		<?= thumb($image, array('width' => 1920, 'height' => 1280, 'crop' => true )); ?>
 				  	</a>
			<?php 
			$active = "";
			endforeach ?>
	  </div>

<?php endif ?>