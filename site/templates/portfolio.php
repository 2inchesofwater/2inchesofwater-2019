<?php snippet('header') ?>

<main id="main" class="inner">
  <article class="portfolio inner">
	<h1><?= $page->headline()->or($page->title()) ?></h1>
	<div class="article-wrapper">
		<?php if ($coverPortfolio = $page->coverPortfolio()): ?>
			<div class="article-media">
				<?= $coverPortfolio->resize(800, 800) ?>
			</div>
		<?php endif ?>	
		<div class="article-body">
			<?= $page->description()->kirbytext() ?>
		</div>
	</div>
	
    <ul class="article-galleryCollection list-unstyled">
	<?php 
		$pageCover = $page->cover()->toFile(); 
		$pageBackground = $page->background()->toFile(); 
	?>
	<?php foreach ($page->images()->not($pageCover)->not($pageBackground) as $galleryImage): ?>
      <li class="article-galleryItem">
			<?= $galleryImage ?>
      </li>
      <?php endforeach ?>
    </ul>
	
  </article>
</main>

	<?php if ($backgroundPortfolio = $page->backgroundPortfolio()): ?>
		<div class="page-background">
			<?= $backgroundPortfolio ?>
		</div>
	<?php endif ?>		

<?php snippet('footer') ?>