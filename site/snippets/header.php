<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
	  <meta charset="utf-8" />
	  <meta name="description" content="<?php echo html($site->description()) ?>" />
	  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
	  <meta name="robots" content="index, follow" />

	  <?php echo css('assets/styles/styles.css') ?>
    <!-- Bootstrap -->
	  <?php echo css('/assets/bootstrap/css/bootstrap.min.css') ?>
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
		<div class="container">
			<div class="header">
				<h1>~</h1>
				<ul class="nav nav-pills">
				    <?php foreach($site->breadcrumb() AS $crumb): ?>
							<a class="btn <?php echo ($crumb->isActive()) ? 'btn-success"' : 'btn-default' ?>" href="<?php echo $crumb->url() ?>"><?php echo $crumb->title() ?></a>
				    <?php endforeach ?>
				</ul>
			</div>
