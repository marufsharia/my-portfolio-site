<?php
	
	namespace App\Http\Controllers;
	
	use App\Models\Service;
	use App\Models\SiteSetting;
    use App\Models\Slider;
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
			$user = User::where('user_name', $user_name)->first();
			if (is_null($user)) {
				abort(404);
			}


			$data['site_setting'] = SiteSetting:: where(['user_id'=>$user->id,'status'=>'1'])
                ->first();
			if(is_null($data['site_setting']))
			{
				$site_setting = new SiteSetting();
				$site_setting->user_id= $user->id;
				$site_setting->save();
				$data['site_setting'] = SiteSetting::find($site_setting->id);
			}

			$data['services'] = Service::where(['user_id'=>$user->id,'status'=>'1'])->get();
			$data['sliders'] = Slider::where(['user_id'=>$user->id,'status'=>'1'])->get();
			$data['info'] = $user;
			return view('frontend.home.index', $data);
		}
	}
