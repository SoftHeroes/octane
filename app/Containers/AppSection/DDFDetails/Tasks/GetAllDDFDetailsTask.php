<?php

namespace App\Containers\AppSection\DDFDetails\Tasks;

use App\Containers\AppSection\DDFDetails\Data\Repositories\DDFDetailsRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllDDFDetailsTask extends Task
{
    protected DDFDetailsRepository $repository;

    public function __construct(DDFDetailsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate(\config('app.page_size'));
    }
}
