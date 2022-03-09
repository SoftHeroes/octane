<?php

namespace App\Containers\AppSection\DDFDetails\UI\API\Controllers;

use App\Ship\Parents\Controllers\ApiController;
use App\Containers\AppSection\DDFDetails\Actions\GetAllDDFDetailsAction;

class Controller extends ApiController
{
    public function getAllDDF()
    {
        $ddf = app(GetAllDDFDetailsAction::class)->run();
        return $this->json($ddf);
    }
}