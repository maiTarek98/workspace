<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Service;
use DB;
use Session;
class servicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=Service::all();
        return view('admin.services.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
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

            'postTitle'    => 'required|min:3',
            'content'  => 'required',
          ],
    
          [
            'postTitle.required'    => 'write your postTitle',
            'content.required'  => 'write your content',

          ]);
        $users= new Service;
        $users->postTitle= $request->postTitle;
        $users->content= $request->content;
        $users->save();

        Session::flash('save','Your data has been recorded');
        return redirect('admin/services');
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
        $user=Service::find($id);
        return view('admin.services.edit',compact('user'));
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
       
       $user=Service::find($id);
       $user->postTitle=$request->input('postTitle');
       $user->content=$request->input('content');
       $user->save();
       
       return redirect('admin/services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat= Service::find($id);
        $cat->destroy($id);    
        return redirect("admin/services");
    }
}
