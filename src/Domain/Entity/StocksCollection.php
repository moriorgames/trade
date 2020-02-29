<?php

namespace Domain\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class StocksCollection extends ArrayCollection
{
    public function addStocks(Stocks $element)
    {
        return $this->add($element);
    }
}
