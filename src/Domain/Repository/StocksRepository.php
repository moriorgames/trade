<?php

namespace Domain\Repository;

use Domain\Entity\StocksCollection;

interface StocksRepository
{
    public function getAll(): StocksCollection;
}
