<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\database\seeders\UserSeeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class auth_controller extends Controller
{

    function login(Request $request)
    {
        return view('management.accessibility.login_form');



        if (!Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return response()->json([
                "success" => false,
                "status" => 200
            ]);
        }

        $user = auth()->user();
        /** @var \App\Models\User $user **/
        $token = $user->createToken('token');
        return $token->plainTextToken;
    }


    function api_login(Request $request)
    {
        if (!Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return response()->json([
                "success" => false,
                "status" => 200
            ]);
        }

        $user = auth()->user();
        /** @var \App\Models\User $user **/
        $token = $user->createToken('token');
        return $token->plainTextToken;
    }

    function registeration(Request $request)
    {
        $validated = $request->validate([
            'students_id' => 'required_without:staffs_id',
            'staffs_id' => 'required_without:students_id',
        ]);


        $res = User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'user_type' => $request->user_type,
            'students_id' => $request->students_id,
            'staffs_id' => $request->staffs_id,

        ]);

        return "added";

        /*
        $adding_seeder = new \Database\Seeders\UserSeeder;
        $adding_seeder->run($request->password,$request->username);
*/
    }
}
