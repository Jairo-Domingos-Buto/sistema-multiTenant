<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\JsonResponse;

class AuthService
{
    public function create(array $data): JsonResponse
    {
        $user = User::create($data);

        return response()->json([
            "message" => "User created successfully",
            "user" => $user,
        ], 201);
    }
}
