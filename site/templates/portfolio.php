<?php snippet('header') ?>

<main id="main" class="main-inner">
  <article class="portfolio">
	<h1><?= $page->headline() ?></h1>
	<div class="article-wrapper">
		<?php if ($coverPortfolio = $page->coverPortfolio()): ?>
			<div class="article-media">
				<?= $coverPortfolio->resize(800, 800) ?>
			</div>
		<?php endif ?>	
		</div>
		<div class="article-body">
			<?= $page->description()->kirbytext() ?>
		</div>
	</div>
  </article>
</main>

	<?php if ($backgroundPortfolio = $page->backgroundPortfolio()): ?>
		<div class="page-background">
			<?= $backgroundPortfolio ?>
		</div>
	<?php endif ?>		

<?php snippet('footer') ?>