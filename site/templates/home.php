<?php snippet('header') ?>

<?php snippet('jumbotron') ?>

<main id="main" class="main home" aria-labelledBy="article-title">
	<article class="home">
		<div class="article-wrapper">
			<div class="article-title">
				<h1 id="article-title"><?= $site->find('bio')->headline() ?></h1>
			</div>
			<div class="article-body">
				<?= $site->find('bio')->text()->kirbytext() ?>
			</div>
		</div>
	</article>
</main>

<section id="portfolio" aria-labelledBy="portfolio-title">
	<div class="teasersCollection">
		<h1 id="portfolio-title">Portfolio.</h1>
		<ul class="teasers list-unstyled">
		<?php foreach (page('portfolio')->children()->listed() as $portfolio): ?>
			<li class="teaser">
				<?php if ($coverPortfolio = $portfolio->coverPortfolio()): ?>
					<div class="lazy loaded teaser-media">
						<?= $coverPortfolio ?>
					</div>
				<?php endif ?>
				<div class="teaser-link">
					<a href="<?= $portfolio->url() ?>">
					  <h2><?= $portfolio->headline()->html() ?></h2>
					</a>		
				</div>
			</li>
		<?php endforeach ?>
		</ul>
	</div>
</section>	

<?php snippet('notes') ?>


<?php snippet('footer') ?>
