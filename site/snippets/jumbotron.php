<section class="container jumbotron">
	<picture id="">
		<!-- <source media="(min-width: 1400px )" srcset="images/Upload_2000px/home-japan-1.jpg"> 
		<source media="(min-width: 1024px )" srcset="images/Upload_2000px/home-japan-1.jpg"> 
		<source media="(min-width: 768px )" srcset="images/Upload_2000px/home-japan-1.jpg"> 
		<source media="" srcset="images/Upload_2000px/home-japan-1.jpg"> -->						
		<?= $site->find('jumbotron')->background()->toFile() ?>						
	</picture>
	<div class="bannergroup">
		<div class="banneritem">
			<div class="panel">
				<div class="panel-heading panel-display-heading">
					<h1 class="language-japanese"><?= $site->find('jumbotron')->headline() ?></h1>
				</div>				
				<div class="panel-body">
					<?= $site->find('jumbotron')->text()->kirbytext() ?>	
				</div>

			</div>				
			<div class="clr"></div>
		</div>
	</div>
</section>