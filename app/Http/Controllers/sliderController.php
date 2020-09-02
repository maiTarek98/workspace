<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use DB;

class sliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=Slider::all();
        return view('admin.slider.index',compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            
            'slidePhoto'=>'required|mimes:jpg,jpeg,gif,png|max:2048',
        ]);
        $img_name=time(). '.' . $request->slidePhoto->getClientOriginalExtension();
        $cat=new Slider;
        $cat->slidePhoto=$img_name;
        $cat->save();
        $request->slidePhoto->move(public_path('/images'), $img_name);
        return redirect('admin/slider');
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
         $user=Slider::find($id);
         return view('admin.slider.edit',compact('user'));
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
        
        $user=Slider::find($id);
        if($request->slidePhoto == null)
        {
            $request->slidePhoto=$user->slidePhoto;
        }
        else{
            $img_name=time(). '.' . $request->slidePhoto->getClientOriginalExtension();
            $user->slidePhoto=$img_name;
            $request->slidePhoto->move(public_path('/images'), $img_name);

        }
        $user->save();
        return redirect('admin/slider');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat= Slider::find($id);
        $cat->destroy($id);    
        return redirect("admin/slider");
    }
}
