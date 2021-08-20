<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User ;
class PaginationController extends Controller
{
    public function allusers()
    {
        $users = User::paginate(10) ;
        return view('paginate.user', compact('users'));
    }
}
