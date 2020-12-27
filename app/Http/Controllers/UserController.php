<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Users\Interfaces\UserInterface;

class UserController extends Controller
{
    /**
     * @var UserInterface
     */
    protected $userRepository;

    public function __construct(UserInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }
}
