<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\About;
use DB;
use Session;
class aboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=About::all();
        return view('admin.about.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
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

            'text'    => 'required|min:3',
          ],
    
          [
            'text.required'    => 'write your text',

          ]);
        $users= new About;
        $users->text= $request->text;
        $users->save();

        Session::flash('save','Your data has been recorded');
        return redirect('admin/about');
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
        $user=About::find($id);
        return view('admin.about.edit',compact('user'));
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
       
       $user=About::find($id);
       $user->text=$request->input('text');
       $user->save();
       
       return redirect('admin/about');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat= About::find($id);
        $cat->destroy($id);    
        return redirect("admin/about");
    }
}
