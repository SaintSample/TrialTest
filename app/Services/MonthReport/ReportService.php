<?php

namespace App\Services\MonthReport;

use App\Repositories\OrderRepositoryContract;
use Doctrine\Common\Collections\ArrayCollection;

class ReportService implements ReportServiceContract
{
    private $repository;

    public function __construct(OrderRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function getLastMonthReport(): Report
    {
        $data = $this->repository->findPerLastMonth();

        return new Report(
            $this->getStatistics($data),
            $this->getTopItems($data)
        );
    }

    private function getTopItems(ArrayCollection $data)
    {
        $result = [];

        //some logic

        return new ArrayCollection($result);
    }

    private function getStatistics(ArrayCollection $data)
    {
        $result = [];

        //some logic

        return new ArrayCollection($result);
    }
}
