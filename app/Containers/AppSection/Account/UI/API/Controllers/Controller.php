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
        return $this->json('Subhamcd');
    }

    public function complex()
    {
        
        $num = rand(1,1000000);
        while(!$this->primeCheck($num)){
            $num = rand(1,1000000);
        }
        return $num;
    }

    function primeCheck($number){
        if ($number == 1)
        return 0;
        for ($i = 2; $i <= $number/2; $i++){
            if ($number % $i == 0)
                return 0;
        }
        return 1;
    }
    
}
