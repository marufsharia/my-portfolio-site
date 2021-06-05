<?php

namespace App\Http\Controllers;


use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function siteEdit()
    {
        $data['site_setting'] = SiteSetting::where(['user_id' => Auth::id(), 'status' => '1'])
            ->first();
        if (is_null($data['site_setting'])) {
            $site_setting = new SiteSetting();
            $site_setting->user_id = Auth::id();
            $site_setting->site_title = 'test tste';
            $site_setting->status = '1';
            $site_setting->save();
            $data['site_setting'] = $site_setting;
        }
        
        return view('backend.site-setting.edit',$data);
    }
    
    public function siteUpdate(Request $request)
    {
        /*
         "user_id": 1,
        "site_title": "test tste",
        "favicon": null,
        "primary_color": "#ededed",
        "secondary_color": "#0f8aec",
        "third_color": "#d82c2e",
        "hover_color": "#d82c2e",
        "header_title": null,
        "header_sub_title": null,
        "name": null,
        "designation": null,
        "download_link": null,
        "service_section_title": null,
        "service_section_description": null,
        "footer_copyright_text": "&copy; BlogFolio 2019",
        "status": "1",
         */
        
        $this->validate($request, [
            'site_title'=>'required|min:2|max:100',
            'primary_color'=>'required|min:2|max:10',
            'secondary_color'=>'required|min:2|max:10',
            'header_title'=>'required|min:2|max:100',
            'header_sub_title'=>'required|min:2|max:100',
            'name'=>'required|min:2|max:100',
            'designation'=>'required|min:2|max:100',
            'download_link'=>'nullable|min:1|max:100',
            'service_section_title'=>'required|min:2|max:100',
            'service_section_description'=>'nullable|min:6|max:1500',
            'footer_copyright_text'=>'required|min:2|max:100',
            'status'=>'required',
        ]);
        $site_setting = SiteSetting::where(['user_id' => Auth::id(), 'status' => '1'])
            ->firstorFail();
        
        $site_setting->site_title = $request->site_title;
        $site_setting->header_title = $request->header_title;
        $site_setting->header_sub_title = $request->header_sub_title;
        $site_setting->name = $request->name;
        $site_setting->designation = $request->designation;
        $site_setting->download_link = $request->download_link;
        $site_setting->service_section_title = $request->service_section_title;
        $site_setting->service_section_description = $request->service_section_description;
        $site_setting->footer_copyright_text = $request->footer_copyright_text;
        $site_setting->primary_color = $request->primary_color;
        $site_setting->secondary_color = $request->secondary_color;
        $site_setting->status = $request->status;
        $site_setting->save();
        return redirect()->back();
        //return $request;
    }


}
