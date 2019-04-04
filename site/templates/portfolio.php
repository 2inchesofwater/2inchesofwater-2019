<?php snippet('header') ?>

<main id="main" class="inner">
  <article class="portfolio inner">
	<div class="article-wrapper">
		<div class="article-title">
			<h1><?= $page->headline()->or($page->title()) ?></h1>
		</div>
		<?php if ($coverPortfolio = $page->coverPortfolio()): ?>
			<div class="article-media">
				<?= $coverPortfolio->resize(800, 800) ?>
			</div>
		<?php endif ?>	
		<div class="article-body">
			<?= $page->description()->kirbytext() ?>
		</div>
	</div>	
  </article>
</main>

<section class="gallery">
    <ul class="gallery-collection list-unstyled">
	<?php 
		$pageCover = $page->cover()->toFile(); 
		$pageBackground = $page->background()->toFile(); 
	?>
	<?php foreach ($page->images()->not($pageCover)->not($pageBackground) as $galleryImage): ?>
      <li class="gallery-item">
			<?= $galleryImage ?>
      </li>
      <?php endforeach ?>
    </ul>
</section>
	
	<?php if ($backgroundPortfolio = $page->backgroundPortfolio()): ?>
		<div class="page-background">
			<?= $backgroundPortfolio ?>
		</div>
	<?php endif ?>		

<?php snippet('footer') ?>