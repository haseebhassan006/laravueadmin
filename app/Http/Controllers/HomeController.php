<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
        return view('home');
    }


    public function getUsers(){

        $q=request('query');
        $total_users=User::all()->count();
        $users=User::where('name', 'like', '%' . $q . '%')
        ->Orwhere('email', 'like', '%' . $q. '%')
        ->latest()->with('user:id,name')->paginate((int)env('PER_PAGE'));
        return response()->json(['users'=>$users]);

    }
}
