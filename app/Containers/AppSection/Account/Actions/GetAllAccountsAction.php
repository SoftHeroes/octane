<?php

namespace App\Containers\AppSection\Account\Actions;

use App\Containers\AppSection\Account\Tasks\GetAllAccountsTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllAccountsAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllAccountsTask::class)->addRequestCriteria()->run();
    }
}
