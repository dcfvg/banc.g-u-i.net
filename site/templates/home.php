<?php snippet('header') ?>

<section id="content">

  <? $collections = $pages->visible() ?>
  <? foreach ($collections as $collection): ?>
  <article class="row">
    <div class="col-sm-8">
      <a href="<?= $collection->url() ?>">
        <h2><?= $collection->title() ?></h2>
      </a>
    </div>
    <div class="col-sm-4">
      <?= excerpt($collection->text(), 300); ?>
    </div>
  </article>
  <? endforeach ?>

</section>

<?php snippet('footer') ?>