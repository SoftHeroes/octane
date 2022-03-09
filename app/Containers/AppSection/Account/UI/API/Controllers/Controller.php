<?php

namespace App\Containers\AppSection\Account\UI\API\Controllers;

use App\Ship\Parents\Controllers\ApiController;
use App\Containers\AppSection\Account\Actions\GetAllAccountsAction;

class Controller extends ApiController
{
    public function getAllAccounts()
    {
        $accounts = app(GetAllAccountsAction::class)->run();
        return $this->json($accounts);
    }

    public function test()
    {
        return $this->json('Subham');
    }
}
