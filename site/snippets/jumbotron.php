<section class="container jumbotron" aria-labelledBy="jumbotron-title">
	<div class="jumbotron-media">
		<?php if ($jumbo = $site->find('jumbotron')->background()->toFile()): ?>
		  <img src="" alt="<?= $jumbo->alt() ?>" class="lazy loaded" data-src="<?= $jumbo->url() ?>" data-srcset="">
		<?php endif ?>
	</div>
	<div class="panel">
		<div class="panel-title">
			<h1 id="jumbotron-title"><?= $site->find('jumbotron')->headline() ?></h1>
			<h2><?= $site->find('jumbotron')->kicker() ?></h2>
		</div>				
		<div class="panel-body">
			<?= $site->find('jumbotron')->text()->kirbytext() ?>	
		</div>
	</div>				
</section>