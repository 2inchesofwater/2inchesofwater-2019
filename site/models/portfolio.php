<?php

class PortfolioPage extends Page {
    public function coverPortfolio() {
		$returnLazyImage = null;
		if ($lazyImage = $this->content()->get('cover')->toFile()) {
			$returnLazyImage = "<img src='' alt='". $lazyImage->alt() ."' class='lazy' data-src='". $lazyImage->url() ."' data-srcset=''>";
		} else {
			$returnLazyImage = $this->image();
		}
        return $returnLazyImage;
    }
    public function backgroundPortfolio() {
        return $this->content()->get('background')->toFile() ?? $this->image();
    }	
    public function galleryPortfolio() {
        return $this->get('gallery');
    }	
}

?>
