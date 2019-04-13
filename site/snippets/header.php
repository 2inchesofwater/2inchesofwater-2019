<!doctype html>
<html lang="en-gb">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
	<meta name="apple-mobile-web-app-capable" content="YES">

	<base href="https://kunghur.com/2inchesofwater-2019/"> -->
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title><?= $site->title() ?> | <?= $page->title() ?></title>
	<?= css(['styles/css/critical.css', '@auto']) ?>
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
	<a href="#main" class="sr-only">Skip to main content.</a>
	<div id="aria-announce" class="sr-assertive sr-only" aria-live="assertive"></div>
	<div class="sitewideHeader" aria-label="Site header.">
		<header id="header">
			<h1>
				<a href="<?= $site->url() ?>" class="logo" aria-label="Returns to home page"><?= $site->title() ?></a>
			</h1>
			
			<nav>
				<button id="toggleMenu" class="nav-toggle" onclick="toggleMenu('menu')">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
				Menu
				</button>
			</nav>	
		</header>

		<menu id="menu" aria-labelledBy="toggleMenu" aria-expanded="false" aria-hidden="true">
			<h2 >Contents.</h2>
			<ul class="list-unstyled">
				<li><a href="<?= $site->url() ?>" aria-role="navigation">Home.</a></li>
				<li><a href="<?= $site->url() ?>#portfolio" aria-role="navigation">Portfolio.</a></li>
			</ul>
		</menu>	
	</div>