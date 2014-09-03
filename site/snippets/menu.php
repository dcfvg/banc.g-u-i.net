<nav id="nav">
  <ul class="nav nav-pills pull-right">
    <?php foreach($pages->visible() AS $p): ?>
    <li><a class="btn <?php echo ($p->isOpen()) ? 'btn-success' : 'btn-default' ?>" href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
    <?php endforeach ?>
  </ul>
</nav>