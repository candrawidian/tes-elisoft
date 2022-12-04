<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        return response([
            'status' => true,
            'message' => 'Sukses',
            'data' => $users
        ], 200);
        // $data = User::latest()->get();
        // return response()->json("SUKSES");
    }
}
