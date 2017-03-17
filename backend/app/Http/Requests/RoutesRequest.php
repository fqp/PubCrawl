<?php

namespace App\Http\Requests;

use Illuminate\Http\Request as IlluminateRequest;

/**
 * Class EventStoreRequest
 * @package App\Http\Requests
 */
class RoutesRequest extends Request
{
    /**
     * @var array
     */
    protected $rules = [
        "routeId" => "int",
    ];

    /**
     * @var null
     */
    private $routeId = null;

    /**
     * Get params from request
     * @param IlluminateRequest $request
     */
    public function getParamsFromRequest(IlluminateRequest $request)
    {
        $this->routeId = $request->input('routeId');
    }

    public function getRouteId()
    {
        return $this->routeId;
    }

}