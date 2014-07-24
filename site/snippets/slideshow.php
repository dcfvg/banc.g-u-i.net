<?php if ($p->hasImages()): ?>
  <div id="carousel-<?php echo $p->uid()?>" class="carousel slide" data-ride="carousel">
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">
			<?php 
			$active = "active";
			foreach($p->images() AS $image): ?>
				<div class="item <?php echo $active ?>">
				  	<?php echo thumb($image, array('width' => 1920, 'height' => 1280, 'crop' => true )); ?>
				</div>
			<?php 
			$active = "";
			endforeach ?>
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-<?php echo $p->uid()?>" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
	  </a>
	  <a class="right carousel-control" href="#carousel-<?php echo $p->uid()?>" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
	  </a>
	</div>
<?php endif ?>