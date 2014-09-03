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
	  <?php echo css('assets/styles/styles.css') ?>
    <?php echo css('assets/comic-neue-1.1/font.css') ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="uid-<?= $page->uri() ?> tpl-<?= $page->template() ?>">

    <div class="container">

			<header id="header">
        <div class="row">
          <div class="col-sm-8">
            <?php $counter = 0; ?>
            <?php foreach($site->breadcrumb() AS $crumb): $counter++; ?>
              <h<?= $counter ?>>
                <a class="<?= ($crumb->isActive()) ? 'active"' : '' ?>" href="<?= $crumb->url() ?>">
                  <?= $crumb->title() ?>
                </a>
              </h<?= $counter ?>>
            <?php endforeach ?>
          </div>
          <div class="col-sm-4 pull-right">
            <?= excerpt($page->text(), 300); ?>
          </div>
        </div>
			</header>
