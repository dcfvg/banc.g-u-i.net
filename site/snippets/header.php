<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
		<meta name="description" content="<?php echo html($site->description()) ?>" />
		<meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
		<meta name="robots" content="index, follow" />
		<?php echo css('assets/styles/css/styles.css') ?>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="uid-<?= $page->uri() ?> tpl-<?= $page->template() ?>">

	<div class="container">

	<header id="header" class="row">

		<div>
		<!-- main bread crumb -->
		<?php foreach($site->breadcrumb() AS $crumb): ?>
			<?php if (! $crumb->isActive()): ?>
					<a class="btn btn-lg <?= ($crumb->isActive()) ? 'btn-success"' : 'btn-default' ?>"  
						data-toggle="tooltip" 
						data-placement="bottom" 
						title="<?= $crumb->subtitle() ?>" 
						<?php if ($crumb->hasImages()): ?>
								data-img="<?= thumb($crumb->images()->first(), array('width' => 800 ), false); ?>"
						<?php endif ?>
						data-original-title="<?= $crumb->subtitle() ?>"
						href="<?= $crumb->url() ?>">
					<?= $crumb->title() ?>
				</a>
			<?php endif ?>
		<?php endforeach ?>
</div>
		<!-- current page title and subtitle -->
		<div class="jumbotron col-sm-4">
			<h2 title="<?= $page->title() ?>"><?= $page->title() ?></h2>
			<div class="lead" title="<?= kirbytext($page->subtitle()) ?>"><?= kirbytext($page->subtitle()) ?></div>
		</div>

		<!-- sub projects -->
		<div class="col-sm-8">
			<? $projects = $page->children()->visible() ?>
			<? foreach ($projects as $project): ?>
						<a href="<?= $project->url() ?>"
							<?php if ($project->hasImages()): ?>
								data-img="<?= thumb($project->images()->first(), array('width' => 800 ), false); ?>"
							<?php endif ?>
							data-toggle="tooltip" title="" data-original-title="<?= $project->subtitle() ?>">
							<?= $project->title() ?>
						</a>
			<? endforeach ?>
		</div>
	</header>