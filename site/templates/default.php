<?php snippet('header') ?>

<section id="content">

	<? $projects = $page->children()->visible() ?>
  <? foreach ($projects as $project): ?>
  <article class="row">
    <div class="col-sm-8">
      <a href="<?= $project->url() ?>">
        <h2><?= $project->title() ?></h2>
      </a>
    </div>
    <div class="col-sm-4">
      <?= excerpt($project->text(), 300); ?>
    </div>
  </article>
  <? endforeach ?>

</section>

<?php snippet('footer') ?>