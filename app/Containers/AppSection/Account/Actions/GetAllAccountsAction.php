<?php

namespace App\Containers\AppSection\Account\Actions;

use App\Ship\Parents\Actions\Action;
use App\Containers\AppSection\Account\Tasks\GetAllAccountsTask;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class GetAllAccountsAction extends Action
{
    protected $count = 0;

    public function run()
    {
        $start = Carbon::now();
        $data = app(GetAllAccountsTask::class)->addRequestCriteria()->run();
        $end = Carbon::now();

        Log::debug("Start : " . $start);
        Log::debug("end : " . $end);
        Log::debug("Diff : " . $end->diff($start));
        return $data;
    }
}
