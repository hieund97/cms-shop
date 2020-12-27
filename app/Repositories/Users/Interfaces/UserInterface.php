<?php

namespace App\Repositories\Users\Interfaces;
use App\Repositories\Base\Interfaces\RepositoryInterface;

interface UserInterface extends RepositoryInterface
{
    /**
     * Get All User
     *
     * @return void
     */
    public function getAllUser();
}