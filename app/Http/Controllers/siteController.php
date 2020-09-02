<?php

namespace App\Http\Controllers;

use App\About;
use App\Contact;
use App\Customer;
use App\Gallery;
use Illuminate\Http\Request;
use App\Service;
use App\Slider;
use App\Subscribe;
use Session;
use DB;

class siteController extends Controller
{
    public function index()
    {
        $users=Slider::all();
        return view('photomaker.index',compact('users'));
    }
    public function service()
    {
        $users=Service::all();
        return view('photomaker.service',compact('users'));
    }
    public function about()
    {
        $users=About::all();
        $users2=Customer::all();

        return view('photomaker.about',compact('users','users2'));
    }
    
    public function gallery()
    {
        $users=Gallery::all();
        return view('photomaker.gallery',compact('users'));
    }
    public function category()
    {
        $users=Gallery::all();
        return view('photomaker.category',compact('users'));
    }
    public function contact()
    {
        $users=Contact::all();
        return view('photomaker.contact',compact('users'));
    }

    ///////////



    public function create()
    {
        return view('photomaker.contact');
    }

    public function store(Request $request)
    {
        
        $this->validate(request(), [

            'companyName'    => 'required|min:3',
            'activityType'  => 'required',
            'tel'  => 'required',
            'email'  => 'required',
            'file'  => 'required|mimes:jpg,jpeg,gif,png|max:2048',

          ],
    
          [
            'companyName.required'    => 'write your companyName',
            'activityType.required'  => 'write your activityType',
            'tel.required'  => 'write your tel',
            'email.required'  => 'write your email',
              'file.required' => 'Enter file',
          ]);
          $img_name=time(). '.' . $request->file->getClientOriginalExtension();
        $users= new Contact;
        $users->companyName= $request->companyName;
        $users->activityType= $request->activityType;
        $users->tel= $request->tel;
        $users->email= $request->email;
        $users->servicesType=implode(",",$request->servicesType);
        $users->type1= implode(",",$request->type1);
        $users->type2= $request->type2;
        $users->type3= implode(",",$request->type3);
        $users->file= $request->file;
        $users->file=$img_name;
        $users->save();
        $request->file->move(public_path('/images'), $img_name);
        Session::flash('save','Your data has been recorded');
        return back();
    }

    public function store2(Request $request)
    {
        
        $this->validate(request(), [
            'email'  => 'required',

          ],
    
          [
            'email.required'  => 'write your email',
          ]);
        $us= new Subscribe;
        $us->email= $request->email;
        $us->save();
        Session::flash('save','Your data has been recorded');
        return back();
    }

}
