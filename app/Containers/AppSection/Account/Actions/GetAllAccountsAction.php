<?php

namespace App\Containers\AppSection\Account\Actions;

use App\Ship\Parents\Actions\Action;
use App\Containers\AppSection\Account\Tasks\GetAllAccountsTask;
use Illuminate\Support\Facades\Log;

class GetAllAccountsAction extends Action
{
    protected $count = 0;

    public function run()
    {

        Log::debug("Account Call : " . $this->count++);

        return app(GetAllAccountsTask::class)->addRequestCriteria()->run();
    }
}
