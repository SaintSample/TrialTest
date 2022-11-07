<?php

namespace App\Repositories;

use App\Entities\Item;
use Doctrine\Common\Collections\ArrayCollection;

interface ItemRepositoryContract
{
    public function findAll(): ArrayCollection;

    public function getById(int $id): Item;
}
