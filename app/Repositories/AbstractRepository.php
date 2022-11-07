<?php

namespace App\Repositories;

use Doctrine\ORM\EntityManager;

abstract class AbstractRepository
{
    protected $repository;

    public function __construct(EntityManager $em)
    {
        $this->repository = $em->getRepository($this->getEntityClass());
    }

    protected function getQueryBuilder(string $alias, string $indexBy = null): \Doctrine\ORM\QueryBuilder
    {
        return $this->repository->createQueryBuilder($alias, $indexBy);
    }

    abstract protected function getEntityClass(): string;
}
