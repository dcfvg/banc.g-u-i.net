<ul class="nav nav-pills pull-right">
	
	<?php foreach($pages->visible() AS $p): ?>
  <a class="btn <?php echo ($p->isOpen()) ? 'btn-success' : 'btn-default' ?>" href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a>
  <?php endforeach ?>
</ul>