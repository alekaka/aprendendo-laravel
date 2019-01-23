<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index() 
    {
        $users = User::all();

        return $users;
    }

    public function show($id, Request $request) 
    {
        $headers = $request->headers->get('user-agent');
        dd($headers);
        $nome = $request->query('name');
        print $nome;
        //$users = User::findOrFail($id);

        return response('Hello World', 200)
                ->header('Content-Type', 'text/plain')
            ;
    }
}
