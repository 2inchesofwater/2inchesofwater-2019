<?php snippet('header') ?>

<?php snippet('jumbotron') ?>

<main id="main" class="main home">
	<article class="home">
		<div class="article-wrapper">
			<div class="article-title">
				<h1><?= $site->find('bio')->headline() ?></h1>
			</div>
			<div class="article-body">
				<?= $site->find('bio')->text()->kirbytext() ?>
			</div>
		</div>
	</article>
</main>

<section id="portfolio" class="row">
	<div class="teasersCollection">
		<h1>Portfolio.</h1>
		<ul class="teasers list-unstyled">
		<?php foreach (page('portfolio')->children()->listed() as $portfolio): ?>
			<li class="teaser">
				<?php if ($coverPortfolio = $portfolio->coverPortfolio()): ?>
					<div class="teaser-media">
						<?= $coverPortfolio->resize(800, 800) ?>
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

<section id="perspectives" class="row">
	<div class="teasersCollection">
		<h1>Perspectives.</h1>
	
		<ul class="teasers list-unstyled">
		
			<li class="teaser">
				<div class="teaser-media">
					<!-- <span class="responsive-background show-xs" style="background-image: url(http://2inchesofwater.com/images/600px/p-full-survey_brief.jpg)"></span> <span class="responsive-background show-sm" style="background-image: url(http://2inchesofwater.com/images/800px/p-full-survey_brief.jpg)"></span> <span class="responsive-background show-md show-lg" style="background-image: url(http://2inchesofwater.com/images/1400px/p-full-survey_brief.jpg)"></span> -->					
				</div>
				
				<div class="teaser-link">
					<a href="/index.php/perspectives/22-ux-survey-recruitment-brief">
						<h2>Jetsam | UX survey recruitment brief.</h2>
					</a>
				</div>
			</li>
			
		</ul>
	</div>
</section>	

<?php snippet('footer') ?>
