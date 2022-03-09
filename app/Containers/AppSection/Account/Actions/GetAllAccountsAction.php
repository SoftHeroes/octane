<?php

namespace App\Containers\AppSection\Account\Actions;

use App\Ship\Parents\Actions\Action;
use App\Containers\AppSection\Account\Tasks\GetAllAccountsTask;

class GetAllAccountsAction extends Action
{
    public function run()
    {
        return app(GetAllAccountsTask::class)->addRequestCriteria()->run();
    }
}
