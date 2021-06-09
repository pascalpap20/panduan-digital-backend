<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserByMySelfController extends Controller
{
    //
    public function login(Request $request){
        $user = User::where('email', $request->email)->first();

        if(!$user || !\Hash::check($request->password, $user->password)){
            return response()->json([
                'message'=>'Password tidak sesuai'
            ], 401);
        }

        // $token = $user->createToken('token-name')->plainTextToken;

        return response()->json([
            'message'   =>  'success',
            'user'      =>  $user,
            // 'token'     => $token
        ], 200);


    }

    function users(Request $id=null){
        return $id?User::find($id):User::all();
    }
}
