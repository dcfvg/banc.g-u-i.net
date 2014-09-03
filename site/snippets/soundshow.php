<?php if ($p->hasSounds()): ?>
			<?php foreach($p->sounds() AS $sound): ?>
			<div class="col-sm-6">
				<h5>
					<?php echo $sound->title() ?>
				</h5>
				<p class="col-sm-2"><?php echo $sound->heure() ?></p>

				<audio controls preload="none" class="col-sm-8">
				  <source src="<?php echo $sound->url() ?>.ogg" type="audio/ogg">
				  <source src="<?php echo $sound->url() ?>" type="audio/mpeg">
					Your browser does not support the audio element.
				</audio><a class="btn btn-default btn-sm col-sm-2" href="<?php echo $sound->url() ?>">mp3 <span class="glyphicon glyphicon-arrow-down"></span></a>
			</div>
			<?php endforeach ?>
<?php endif ?>
