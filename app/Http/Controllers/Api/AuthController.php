<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\AuthService;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    public function __construct(
        protected  AuthService $authService
        ){}

    public function login(LoginRequest $request){

    }

    public function register(RegisterRequest $request):JsonResponse{
        $data = $request->validated();
        return $this->authService->create($data);
    }
}
