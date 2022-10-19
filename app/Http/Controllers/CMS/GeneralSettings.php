<?php
namespace App\Http\Controllers\CMS;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller as Pro;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use \App\Http\Helpers\Cmstranslate;
// model
use App\Models\CmsModels\GlobaSettings;
class GeneralSettings extends Pro
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    // mail server Smtp Config
    public function SmtpConfig(Request $request)
    {
        return view('admin.settings.smtpconfig');
    }
    // website info  config
    public function Siteinfo(Request $request)
    {
        return view('admin.settings.siteinfo');
    }
    // website Logos  config
    public function SiteLogos(Request $request)
    {
        return view('admin.settings.sitelogos');
    }

    // soical mediaa config
    public function Soical(Request $request)
    {
        $soical = GlobaSettings::where('key','like','social_%')->get();
        $data   = array('soical_keys' => $soical );
        // echo  substr('social_googleplus', 7);
        // echo config('site.social_facebook');
        return view('admin.settings.soical',$data );
    }

   // update values
    public function UpdateConfigkeys(Request $request)
    {
        $update_keys = $request->except('_token');
        foreach ($update_keys as $key => $value) {
           $update = GlobaSettings::where('key',$key)->update(['value' => $value]);
              /* if (!$update){
                    $add_config_key = new GlobaSettings();
                    $add_config_key->key = $key;
                    $add_config_key->value = $value;
                    $add_config_key->save();
                 }*/
               }
       return back()->with('is_edit','suss');
    }

   // update site logos
    public function UpdateLogos(Request $request)
    {
        $update_keys = $request->except('_token');

                //site_logo
                if($request->hasFile('site_logo')) {
                     $file = $request->file('site_logo');
                     $site_logo = $file->getClientOriginalName();
                     $image['filePath'] = $site_logo;
                     $file->move('uploads/config/', $site_logo);
                     if(file_exists('uploads/config/'.config('site.site_logo'))){ unlink('uploads/config/'.config('site.site_logo')); }
                }else { $site_logo = config('site.site_logo'); }
               // mobilelogo
                if($request->hasFile('site_mobilelogo')) {
                     $file = $request->file('site_mobilelogo');
                     $mobilelogo = $file->getClientOriginalName();
                     $image['filePath'] = $mobilelogo;
                     $file->move('uploads/config/', $mobilelogo);
                     if(file_exists('uploads/config/'.config('site.site_mobilelogo'))){ unlink('uploads/config/'.config('site.site_mobilelogo'));  }
                }else { $mobilelogo = config('site.site_mobilelogo'); }

                // faiveicone
                if($request->hasFile('site_faiveicone')) {
                     $file = $request->file('site_faiveicone');
                     $faiveicone = $file->getClientOriginalName();
                     $image['filePath'] = $faiveicone;
                     $file->move('uploads/config/', $faiveicone);
                     if(file_exists('uploads/config/'.config('site.site_faiveicone'))){ unlink('uploads/config/'.config('site.site_faiveicone'));  }
                }else { $faiveicone = config('site.site_faiveicone'); }

                $update = GlobaSettings::where('key','site_logo')->update(['value' => $site_logo]);
                $update = GlobaSettings::where('key','site_mobilelogo')->update(['value' => $mobilelogo]);
                $update = GlobaSettings::where('key','site_faiveicone')->update(['value' => $faiveicone]);

             return back()->with('is_edit','suss');
    }




























}// end main class
