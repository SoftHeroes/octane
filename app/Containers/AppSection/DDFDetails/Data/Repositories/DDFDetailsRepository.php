<?php

namespace App\Containers\AppSection\DDFDetails\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class DDFDetailsRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
