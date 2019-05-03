<?php snippet('header') ?>

<main id="main" class="inner">
  <article class="portfolio inner">
	<div class="article-wrapper">
		<div class="article-title">
			<h1><?= $page->headline()->or($page->title()) ?></h1>
		</div>
		<?php if ($coverPortfolio = $page->coverPortfolio()): ?>
			<div class="article-media">
				<?= $coverPortfolio ?>
			</div>
		<?php endif ?>	
		<div class="article-body">
			<?= $page->description()->kirbytext() ?>
		</div>
	</div>	
  </article>
</main>

<section class="gallery">
    <ul class="gallery-collection list-unstyled" id="gallery-collection">
	<?php 
		$pageCover = $page->cover()->toFile(); 
		$pageBackground = $page->background()->toFile(); 
	?>
	<?php foreach ($page->images()->not($pageCover)->not($pageBackground) as $galleryImage): ?>
      <li class="gallery-item" data-src="<?= $galleryImage->url() ?>">
		<a href="<?= $galleryImage->url() ?>">
			<?= $galleryImage ?>
		</a>
      </li>
      <?php endforeach ?>
    </ul>
</section>
	
	<?php if ($backgroundPortfolio = $page->backgroundPortfolio()): ?>
		<div class="page-background">
			<?= $backgroundPortfolio ?>
		</div>
	<?php endif ?>		
	<script src="../assets/js/lightgallery.js"></script>
	<script src="../assets/js/lg-thumbnail.min.js"></script>
	<script src="../assets/js/lg-video.min.js"></script>
	<script src="../assets/js/lg-fullscreen.min.js"></script>
	<script>lightGallery(document.getElementById('gallery-collection'));</script>
<?php snippet('footer') ?>