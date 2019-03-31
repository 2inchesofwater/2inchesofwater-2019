<?php

class PortfolioPage extends Page {
    public function coverPortfolio() {
        return $this->content()->get('cover')->toFile() ?? $this->image();
    }
}

?>
