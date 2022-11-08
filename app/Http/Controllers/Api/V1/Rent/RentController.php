<?php

namespace App\Http\Controllers\Api\V1\Rent;

use App\Http\Requests\Rent\RentRequest;
use App\Http\Resources\Rent\RentIndexResource;
use App\Services\RentService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class RentController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $serviceClass;

    public function __construct(RentService $service)
    {
        $this->serviceClass = $service;
    }

    /**
     * Method for get list of available cars
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return RentIndexResource::collection($this->serviceClass->index());
    }

    public function rent(RentRequest $request): bool
    {
        return $this->serviceClass->rent($request);
    }

}
