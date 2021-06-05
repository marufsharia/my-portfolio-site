<?php

	namespace App\Http\Controllers;

	use App\Models\Service;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\DB;
    
    class ServiceController extends Controller {
		/**
		 * Display a listing of the resource.
		 *
		 * @param \Illuminate\Http\Request $request
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function index(Request $request)
		{

			$query =Service::where(['user_id' => Auth::user()->id]);
			if(!is_null($request->status))
			{
				$query->where('status','=',$request->status);
			}

			$data['services'] = $query->get();

			$query2 = Service::select('status', DB::raw('count(*) as total'));
            $query2->groupBy('status');
            $data['stats'] = $query2->get();

            $data['active_no'] = 0;
            $data['inactive_no'] = 0;
            $data['draft_no'] = 0;

            foreach ($data['stats'] as $d)
			{
				if($d->status == 1)
				{
					$data['active_no']= $d->total;
				}elseif($d->status == 0)
				{
					$data['inactive_no'] = $d->total;
				}
				elseif($d->status == 2)
				{
					$data['draft_no'] = $d->total;
				}
			}
			$data['all_no'] = (int) $data['active_no'] + $data['inactive_no'] + $data['draft_no'];

			return view('backend.services.index',$data);
		}

		/**
		 * Show the form for creating a new resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function create()
		{
			return view('backend.services.create');
		}

		/**
		 * Store a newly created resource in storage.
		 *
		 * @param  \Illuminate\Http\Request $request
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function store(Request $request)
		{

			$this->validate($request, [
				'title' => 'required',
				'iconName' => 'required',
				'link' => 'nullable|min:2|max:250',
				'status' => 'required',

			]);

			$service = new Service();
			$service->user_id = Auth::id();
			$service->title = $request->title;
			$service->icon = $request->iconName;
			$service->link = $request->link;
			$service->status = $request->status;

			if($service->save())
			{
				return redirect()->route('services.index');
			}
		}

		/**
		 * Display the specified resource.
		 *
		 * @param  \App\Models\Service $service
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function show(Service $service)
		{
			//
		}

		/**
		 * Show the form for editing the specified resource.
		 *
		 * @param  \App\Models\Service $service
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function edit($id)
		{
			$data['service'] = Service::where(['user_id'=>Auth::id(),'id'=>$id])->firstorfail();
			return view('backend.services.edit',$data);
		}

		/**
		 * Update the specified resource in storage.
		 *
		 * @param  \Illuminate\Http\Request $request
		 * @param  \App\Models\Service $service
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function update(Request $request, $id)
		{
			$this->validate($request, [
				'title' => 'required',
				'iconName' => 'required',
				'link' => 'nullable|min:2|max:250',
				'status' => 'required',
			
			]);
			
			$service = Service::where(['user_id'=>Auth::id(),'id'=>$id])->firstOrFail();
			$service->title = $request->title;
			$service->icon = $request->iconName;
			$service->link = $request->link;
			$service->status = $request->status;
			
			if ($service->save()) {
				return redirect()->route('services.index');
			}
		}
		
		public function makeActive($id)
		{
			$service = Service::where(['user_id' => Auth::id(), 'id' => $id])->firstOrFail();
			$service->status = '1';
			if ($service->save()) {
				
				return 'true';
			} else {
				return 'false';
			}
		}
		
		
		public function makeInactive($id)
		{
			$service = Service::where(['user_id' => Auth::id(), 'id' => $id])->firstOrFail();
			$service->status = '0';
			if ($service->save()) {
				
				return 'true';
			} else {
				return 'false';
			}
		}
		
		/**
		 * Remove the specified resource from storage.
		 *
		 * @param  \App\Models\Service $service
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function destroy(Service $service)
		{
			$service = Service::findOrFail($service->id);
			if ($service->delete()) {
				
				return 'true';
			} else {
				return 'false';
			}
		}
	}
