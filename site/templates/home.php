<?php snippet('header') ?>

<section class="container jumbotron">
	<picture id="">
		<!-- <source media="(min-width: 1400px )" srcset="images/Upload_2000px/home-japan-1.jpg"> 
		<source media="(min-width: 1024px )" srcset="images/Upload_2000px/home-japan-1.jpg"> 
		<source media="(min-width: 768px )" srcset="images/Upload_2000px/home-japan-1.jpg"> 
		<source media="" srcset="images/Upload_2000px/home-japan-1.jpg"> -->						
		<img src="images/2000px/home-japan-1.jpg" class="" alt="">						
		<p class="sr-only">Dan Gilmore.</p>
	</picture>

	<div class="bannergroup">
		<div class="banneritem">
			<div class="panel">
				<div class="panel-heading panel-display-heading">
					<h1 class="language-japanese">こんにちは.</h1>
				</div>				
				<div class="panel-body">
					<p>Digital + Life.</p>
				</div>

			</div>				
			<div class="clr"></div>
		</div>
	</div>
</section>


<section id="main" class="main container">
	<article id="home">
		<h1>UX/UI developer.</h1>

		<div class="article-body">
			<p>Dan Gilmore is a UX/UI developer with 10 years’ experience. He’s passionate about creating interfaces that put people first. Dan builds responsive front-ends for websites and applications, with a special focus on accessibility, progressive enhancement and scalability.</p>
		</div>
	</article>
</section>

<section id="portfolio" class="row">
	<div class="teasersCollection">
		<h1>Portfolio.</h1>
	
		<ul class="teasers list-unstyled">
		
			<li class="teaser">
				<div class="teaser-media">
					<img src="images/800px/digital-performax-1.jpg" aria-hidden="true">					
				</div>
				
				<div class="teaser-link">
					<a href="/index.php/digital/13-performax">
						<h2>Performax.</h2>
					</a>
				</div>
			</li>
						
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
<!--
<main>
  <header class="intro">
    <h1><?= $site->title() ?></h1>
  </header>

  <ul class="grid">
    <?php foreach (page('photography')->children()->listed() as $album): ?>
    <li>
      <a href="<?= $album->url() ?>">
        <figure>
          <?php if ($cover = $album->cover()): ?>
          <?= $cover->resize(1024, 1024) ?>
          <?php endif ?>
          <figcaption>
            <span>
              <span class="example-name"><?= $album->title() ?></span>
            </span>
          </figcaption>
        </figure>
      </a>
    </li>
    <?php endforeach ?>
  </ul>

</main>
-->

<?php snippet('footer') ?>
