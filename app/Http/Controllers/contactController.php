<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Contact;
use DB;
use Session;
class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=Contact::all();
        return view('admin.contact.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate(request(), [

            'companyName'    => 'required|min:3',
            'activityType'  => 'required',
            'tel'  => 'required',
            'email'  => 'required',
            'servicesType'  => 'required',
            'type1'  => 'required',
            'type2'  => 'required',
            'type3'  => 'required',
            'file'  => 'required',

          ],
    
          [
            'companyName.required'    => 'write your companyName',
            'activityType.required'  => 'write your activityType',
            'tel.required'  => 'write your tel',
            'email.required'  => 'write your email',
          ]);
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
        $users->save();

        Session::flash('save','Your data has been recorded');
        return redirect('admin/contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=Contact::find($id);
        return view('admin.contact.edit',compact('user'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id)
   {
       
       $user=Contact::find($id);
       $user->companyName= $request->input('companyName');
       $user->activityType= $request->input('activityType');
       $user->tel= $request->input('tel');
       $user->email= $request->input('email');
       $user->servicesType= $request->input('servicesType');
       $user->type1= $request->input('type1');
       $user->type2= $request->input('type2');
       $user->type3= $request->input('type3');
       $user->file= $request->input('file');
       $user->save();
       
       return redirect('admin/contact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat= Contact::find($id);
        $cat->destroy($id);    
        return redirect("admin/contact");
    }
}
