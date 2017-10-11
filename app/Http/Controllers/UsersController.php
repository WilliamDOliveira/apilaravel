<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Hashing\BcryptHasher;
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
        $request[ 'password' ] = bcrypt( $request[ 'password' ] );
        $user = User::create( $request->all() );

        return response()->json( $user );
    }
    public function update( Request $request , $id ){
        return response()->json( 'update' );        
    }
    public function delete( $id ){
        return response()->json( 'delete' );        
    }
}
