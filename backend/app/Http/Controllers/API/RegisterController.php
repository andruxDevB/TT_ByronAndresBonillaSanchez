<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\JsonResponse;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends BaseController
{
    // Register User Api
    public function register(StoreUserRequest $request, UserService $userservice): JsonResponse
    {
        $user = $userservice->registerUser($request);
        
        return $this->sendResponse($user, 'User register succesfully');
    }

    public function login(Request $request, UserService $userservice): JsonResponse
    {
        if(Auth::attempt(['email'=>$request->email, 'password' => $request->password]))
        {
            $user = $userservice->loginUser($request);

            return $this->sendResponse($user, 'User login successfully');
        } else {

            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }
    }
}
