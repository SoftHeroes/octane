<?php

namespace App\Containers\AppSection\Account\UI\API\Controllers;

use Request;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Controllers\ApiController;
use App\Containers\AppSection\Account\Actions\GetAllAccountsAction;

class Controller extends ApiController
{
    public function getAllAccounts(Request $request)
    {
        $accounts = Apiato::call(GetAllAccountsAction::class,[$request]);
        return $this->json($accounts);
    }
}
