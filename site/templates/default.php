<?php snippet('header') ?>

<section id="main" aria-labelledBy="article-title">
	<div class="article-wrapper">
		<h1 class="article-title"><?= $page->title() ?></h1>
		<div class="article-body">
			<?= $page->text()->kt() ?>
		</div>
	</div>
</section>

<?php snippet('footer') ?>
