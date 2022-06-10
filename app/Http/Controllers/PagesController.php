<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    /**
     * Show welcome
     * @return Response
     */
    public function welcome()
    {
        if (Auth::check()) {
            return view('welcome');
        } else {
            return view('welcome');
        }
    }

}
