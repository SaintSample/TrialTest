<?php

namespace App\Repositories;

use App\Entities\Order;
use Doctrine\Common\Collections\ArrayCollection;

interface OrderRepositoryContract
{
    public function findAll(): ArrayCollection;

    public function findAllInTimeRange(\DateTime $start, \DateTime $end): ArrayCollection;

    public function findPerLastMonth(): ArrayCollection;

    public function getById(int $id): Order;
}
