<?php snippet('header') ?>

<main>
  <article class="note">
      <h1><?= $page->title() ?></h1>
      <?= $page->text()->kt() ?>
  </article>
</main>

<?php snippet('footer') ?>
