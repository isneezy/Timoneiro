<?php

namespace Isneezy\Timoneiro\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Isneezy\Timoneiro\DataType\Service;
use Isneezy\Timoneiro\DataType\ServiceInterface;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @param $dataType
     * @return ServiceInterface
     */
    public function getService($dataType) {
        return app($dataType->service ?? Service::class);
    }
}
