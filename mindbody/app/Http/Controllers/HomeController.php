<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        switch (Auth::user()->role) {
            case 'USR':
                return redirect('/user');
            break;
            case 'ADM':
                return redirect('/admin');
            break;
            case 'TRN':
                return redirect('/trainer');
            break;
            default:
                return redirect('/');
            break;
        }
    }
}
