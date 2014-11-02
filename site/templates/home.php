  <?php snippet('header') ?>

  <div id="collections">
      <? $collections = $pages->visible() ?>
  <? foreach ($collections as $collection): ?>
    <div class="col-sm-8">
      <a class="col-sm-4 btn btn-lg" href="<?= $collection->url() ?>" data-toggle="tooltip" data-placement="right" title="<?= $collection->subtitle() ?>" ><?= $collection->title() ?></a>
    </div>
  <? endforeach ?>

  </div>

  <div class="row">
    <?= kirbytext($page->text()) ?>
  </div>
<?php snippet('footer') ?>