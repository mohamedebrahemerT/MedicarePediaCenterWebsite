<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\settings;
use App\WhoWeAre;
use App\VisionMission;
use App\Department;
use App\Ourworks;
use App\product;
use App\photoes;
use App\filess;
use App\Objectives;
use App\newes;

use DB;
use Validator;

class homeForentEndController extends Controller
{

public function productes()
    {
           $products=product::get();
          return view('forentend.Services.products', compact('products'));
        
    }
    public function index()
    {
      
        
         $photoes = photoes::orderBy('id', 'desc')->first();


        $photoes = $photoes->id;


        $file_id = $photoes;
        $filess = filess::where('relation_id', $file_id)->get();


        $WhoWeAre = WhoWeAre::orderBy('id', 'asc')->first();
        $VisionMission = VisionMission::orderBy('id', 'asc')->first();
        $Objectives = Objectives::orderBy('id', 'asc')->first();


        $departments = DB::table('departments')
            ->whereNull('parent')->orderBy('order','ASC')->get();


        return view('forentend.home', compact('WhoWeAre', 'VisionMission', 'Objectives', 'departments', 'filess'));

    }

    public function main()
    {

    $newess= newes::paginate(3);
     //   dd(app()->getLocale());
         app()->setLocale('ar');
        //dd(app()->getLocale());
         session()->put('lang','ar');


        $photoes = photoes::orderBy('id', 'desc')->first();


        $photoes = $photoes->id;


        $file_id = $photoes;
        $filess = filess::where('relation_id', $file_id)->get();


        $WhoWeAre = WhoWeAre::orderBy('id', 'asc')->first();
        $VisionMission = VisionMission::orderBy('id', 'asc')->first();
        $Objectives = Objectives::orderBy('id', 'asc')->first();


        $departments = DB::table('departments')
            ->whereNull('parent')->orderBy('order','ASC')->get();


        return view('forentend.home', compact('WhoWeAre', 'VisionMission', 'Objectives', 'departments', 'filess','newess'));


    }

    public function en()
    {


        $photoes = photoes::orderBy('id', 'desc')->first();


        $photoes = $photoes->id;


        $file_id = $photoes;
        $filess = filess::where('relation_id', $file_id)->get();


        $WhoWeAre = WhoWeAre::orderBy('id', 'asc')->first();
        $VisionMission = VisionMission::orderBy('id', 'asc')->first();
        $Objectives = Objectives::orderBy('id', 'asc')->first();


        $departments = DB::table('departments')
            ->whereNull('parent')->get();


        return view('forentend.home', compact('WhoWeAre', 'VisionMission', 'Objectives', 'departments', 'filess'));


    }

    public function Aboutus()
    {


        $WhoWeAre = WhoWeAre::orderBy('id', 'asc')->first();
        $VisionMission = VisionMission::orderBy('id', 'asc')->first();

        return view('forentend.Aboutus.Aboutus', compact('WhoWeAre', 'VisionMission'));

    }


    public function displayImage($filename)

    {


        $path = storage_public('storage/app/' . $filename);


        if (!File::exists($path)) {

            abort(404);

        }


        $file = File::get($path);

        $type = File::mimeType($path);


        $response = Response::make($file, 200);

        $response->header("Content-Type", $type);


        return $response;

    }

    public function profile()
    {
        return view('auth.profile');
    }

    public function updateProfile(Request $request){
        //dd($request->all());
        $valid=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|unique:users,email,'.auth()->id(),
            'password'=>"confirmed"
        ]);

        if ($valid->passes()){
            $data=$request->only('name','email');
            if (!empty($request->password)){
                $data['password']=bcrypt($request->password);
            }
            if ($request->hasFile('avatar'))
            {

                $data['avatar']=\Storage::disk('public')->put('/',$request->avatar);
            }
            
            auth()->user()->update($data);
            return redirect()->back();
        }
        return redirect()->back()->withErrors($valid->errors());
    }


}


