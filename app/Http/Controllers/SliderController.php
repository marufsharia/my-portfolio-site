<?php
    
    namespace App\Http\Controllers;
    
    use App\Models\Slider;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\DB;
    
    class SliderController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @param Request $request
         * @return \Illuminate\Http\Response
         */
        public function index(Request $request)
        {
            
            $query = Slider::where(['user_id' => Auth::user()->id]);
            if (!is_null($request->status)) {
                $query->where('status', '=', $request->status);
            }
            
            $data['sliders'] = $query->get();
            
            $query2 = Slider::select('status', DB::raw('count(*) as total'));
            $query2->groupBy('status');
            $data['stats'] = $query2->get();
            
            $data['active_no'] = 0;
            $data['inactive_no'] = 0;
            $data['draft_no'] = 0;
            
            foreach ($data['stats'] as $d) {
                if ($d->status == 1) {
                    $data['active_no'] = $d->total;
                } elseif ($d->status == 0) {
                    $data['inactive_no'] = $d->total;
                } elseif ($d->status == 2) {
                    $data['draft_no'] = $d->total;
                }
            }
            $data['all_no'] = (int)$data['active_no'] + $data['inactive_no'] + $data['draft_no'];
            
            return view('backend.image-sliders.index', $data);
        }
        
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('backend.image-sliders.create');
        }
        
        /**
         * Store a newly created resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            
            $this->validate($request, [
                'file' => 'required',
                'alt' => 'required|min:2|max:250',
                'status' => 'required',
            ]);
            $user = Auth::user();
            $slider = new Slider();
            $slider->user_id = $user->id;
            $slider->alt = $request->alt;
            $slider->status = $request->status;
            if ($request->hasFile('file')) {
                $photo = fileUploadHelper($request->file('file'), getSliderPath($user->user_name));
                $slider->path = $photo;
            }
            
            if ($slider->save()) {
                return redirect()->route('image-sliders.index');
            }
        }
        
        /**
         * Display the specified resource.
         *
         * @param \App\Models\Slider $slider
         * @return \Illuminate\Http\Response
         */
        public function show(Slider $slider)
        {
            //
        }
        
        /**
         * Show the form for editing the specified resource.
         *
         * @param \App\Models\Slider $slider
         * @return \Illuminate\Http\Response
         */
        public function edit(Slider $slider)
        {
            //
        }
        
        /**
         * Update the specified resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @param \App\Models\Slider $slider
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, Slider $slider)
        {
            //
        }
        
        /**
         * @param $id
         * @return string
         */
        public function makeActive($id)
        {
            $service = Slider::where(['user_id' => Auth::id(), 'id' => $id])->firstOrFail();
            $service->status = '1';
            if ($service->save()) {
                
                return 'true';
            } else {
                return 'false';
            }
        }
        
        /**
         * @param $id
         * @return string
         */
        public function makeInactive($id)
        {
            $service = Slider::where(['user_id' => Auth::id(), 'id' => $id])->firstOrFail();
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
         * @param Request $request
         * @return \Illuminate\Http\Response
         */
        public function destroy(Request $request)
        {
            $slider = Slider::findorFail($request->id);
            if (deleteFile($slider->path)) {
                $slider->delete();
                return 'true';
            } else {
                return 'false';
            }
        }
    }
