<?php

namespace App\Services\MonthReport;

use Doctrine\Common\Collections\ArrayCollection;

class Report
{
    private $statistics;

    private $top;

    /**
     * @param $statistics
     * @param $top
     */
    public function __construct(ArrayCollection $statistics, ArrayCollection $top)
    {
        $this->statistics = $statistics;
        $this->top = $top;
    }

    /**
     * @return ArrayCollection
     */
    public function getStatistics(): ArrayCollection
    {
        return $this->statistics;
    }

    /**
     * @return ArrayCollection
     */
    public function getTop(): ArrayCollection
    {
        return $this->top;
    }
}
