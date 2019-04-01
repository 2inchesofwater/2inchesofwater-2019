<?php

class PortfolioPage extends Page {
    public function coverPortfolio() {
        return $this->content()->get('cover')->toFile() ?? $this->image();
    }
    public function backgroundPortfolio() {
        return $this->content()->get('background')->toFile() ?? $this->image();
    }	
    public function galleryPortfolio() {
        return $this->get('gallery');
    }	
}

?>
