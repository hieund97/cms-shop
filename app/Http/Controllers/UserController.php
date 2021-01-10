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

    /**
     * API get list user
     *
     * @return void
     */
    public function getListUser()
    {
        $dataUser = $this->userRepository->getAllUser();

        return response()->json(['data' => $dataUser], 200);
    }

    /**
     * API store User
     *
     * @param Request $request
     * @return void
     */
    public function storeUser(Request $request)
    {
        
    }
}
