<?php

class PortfolioPage extends Page
{
    public function coverPortfolio()
    {
		// need to verify whether $this refers to the correct context for my purposes
        return $this->content()->get('cover')->toFile() ?? $this->image();
    }
}
