<!doctype html>
<html lang="en-gb">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
	<meta name="apple-mobile-web-app-capable" content="YES">

	<!-- <base href="http://2inchesofwater.com/"> -->
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title><?= $site->title() ?> | <?= $page->title() ?></title>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-22158359-1', 'auto');
	  ga('send', 'pageview');

	</script>
</head>

<body>
	<a href="#main" class="sr-only">Skip to main content</a>
	
	<header id="header">
		<h1>
			<a href="<?= $site->url() ?>" class="logo"><?= $site->title() ?></a>
		</h1>
		
		<nav>
			<button id="nav-toggle" class="nav-toggle" id="navToggle">Menu</button>
		</nav>	
	</header>

	<menu aria-labelledBy="navToggle" aria-expanded="false">
		<h2 >Contents.</h2>
		<ul class="list-unstyled">
			<?php foreach ($site->children()->listed() as $item): ?>
				<li><?= $item->title()->link() ?></li>
			<?php endforeach ?>
			
			<li class="">
				<a href="/index.php">Home.</a>
			</li>
			<li class="">
				<a href="#portfolio">Porfolio.</a>
			</li>
			<li class="">
				<a href="#perspectives">Perspectives.</a>
			</li>
			<li class="">
				<a href="#life">Life.</a>
			</li>
		</ul>
	</menu>	




<!-- 

<body class="home " style="">

<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <?= css(['assets/css/index.css', '@auto']) ?>

</head>
-->    
<!--	<header class="header">
      <a class="logo" href="<?= $site->url() ?>"><?= $site->title() ?></a>

      <nav id="menu" class="menu">
        <?php foreach ($site->children()->listed() as $item): ?>
        <?= $item->title()->link() ?>
        <?php endforeach ?>
      </nav>
    </header> -->

