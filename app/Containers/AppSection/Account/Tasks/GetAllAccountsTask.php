<?php

namespace App\Containers\AppSection\Account\Tasks;

use App\Containers\AppSection\Account\Data\Repositories\AccountRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllAccountsTask extends Task
{
    protected AccountRepository $repository;

    public function __construct(AccountRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate(\config('app.page_size'));
    }
}
