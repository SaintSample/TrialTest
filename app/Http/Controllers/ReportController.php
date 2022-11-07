<?php

namespace App\Http\Controllers;

use App\Services\MonthReport\ReportServiceContract;

class ReportController extends Controller
{
    private $service;

    public function __construct(ReportServiceContract $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return \response()->json($this->service->getLastMonthReport());
    }
}
