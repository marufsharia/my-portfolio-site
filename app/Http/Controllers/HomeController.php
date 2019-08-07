<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('mySite');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('backend.dashboard.index');
    }
	
	public function mySite($user_name)
	{
	    $user =  User::with('services')->where('user_name',$user_name)->first();
		if(is_null($user)){
			abort(404);
		}
		$data['info'] = $user;
		return view('frontend.home.index',$data);
    }
}
