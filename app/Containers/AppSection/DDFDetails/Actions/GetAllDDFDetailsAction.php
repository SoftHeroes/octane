<?php

namespace App\Containers\AppSection\DDFDetails\Actions;

use App\Containers\AppSection\DDFDetails\Tasks\GetAllDDFDetailsTask;
use App\Ship\Parents\Actions\Action;

class GetAllDDFDetailsAction extends Action
{
    public function run()
    {
        return app(GetAllDDFDetailsTask::class)->addRequestCriteria()->run();
    }
}
