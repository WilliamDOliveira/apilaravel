<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersController extends Controller
{

    public function index(){
        $users = User::all();
        return response()->json( $users );
    }
    public function show( $id ){
        return response()->json( 'Show' );
    }
    public function store( Request $request ){
        $request[ 'api_token' ] = str_random( 60 );
        $request[ 'password' ] = md5( $request[ 'password' ] );
        // md5() sha1() base64_decode base64_encode
        // $request[ 'password' ] =  Hash::make( $request[ 'password' ] );
        // $request['password'] = app('hash')->make($request['password']);
        // $request[ 'password' ] = Hash::make( $request[ 'password' ] );
        // Hash::make( $request[ 'password' ] );

        $user = User::create( $request->all() );

        return response()->json( $user );
        // return response()->json( $user, $all );
    }
    public function update( Request $request , $id ){
        return response()->json( 'update' );        
    }
    public function delete( $id ){
        return response()->json( 'delete' );        
    }
}
