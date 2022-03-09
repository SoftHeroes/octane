<?php

namespace App\Containers\AppSection\Account\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class AccountRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
