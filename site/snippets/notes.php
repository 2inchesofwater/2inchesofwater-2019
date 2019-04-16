<section class="container notes" aria-labelledBy="notes-title">
	<div class="panel">
		<div class="panel-title">
			<h1 id="notes-title"><?= $site->find('notes')->title() ?></h1>
		</div>				
		<div class="panel-body">
			<ul class="list-unstyled grid-collection">
			<?php foreach (page('notes')->children()->listed() as $note): ?>
				<li class="grid-item"><?= $note->text()->kirbytext() ?></li>
			<?php endforeach ?>
			</ul>
		</div>
	</div>				
</section>