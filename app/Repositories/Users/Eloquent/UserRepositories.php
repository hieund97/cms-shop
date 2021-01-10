<?php

namespace App\Repositories\Users\Eloquent;

use App\Repositories\Base\Eloquent\RepositoriesAbstract;
use App\Repositories\Users\Interfaces\UserInterface;
use Illuminate\Support\Carbon;

class UserRepositories extends RepositoriesAbstract implements UserInterface
{
    /**
     * Get All user
     *
     * @return void
     */
    public function getAllUser()
    {
        $data = $this->model::all();

        return $data;
    }
}