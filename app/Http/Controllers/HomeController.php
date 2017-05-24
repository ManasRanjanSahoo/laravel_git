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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login.index');
    }

  //   public function doLogin(Request $request){

  //   		$this->validate(request(),[ 
  //   		'username'=>'required|email',
  //   		'password'=>'required|min:3'

  //   		]);

  //   	$userdata = array(

		// 'email'=>request('username'),
		// 'password'=>request('password')
  //   	);


  //   	 if (Auth::attempt($userdata)) {
  //   	 	dd('loogin');

  //   	 //	$request->session()->flash('success', 'Login was successful!');
  //   	 	    	 	dd('leeoogin');

  //   	 	redirect('landing');

  //   	 }else{

		// 	$request->session()->flash('status', 'Opps! something went wrong!');
  //   	 	redirect('login');

  //   	 }
  //   }


    // app/controllers/HomeController.php
		public function doLogout()
		{
		    Auth::logout(); // log the user out of our application
		    return redirect('login'); // redirect the user to the login screen
		}

}
