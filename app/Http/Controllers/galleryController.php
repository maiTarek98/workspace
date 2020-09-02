<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use DB;

class galleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=Gallery::all();
        return view('admin.gallery.index',compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
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
            
            'imgs'=>'required|mimes:jpg,jpeg,gif,png|max:2048',
            'sectionImgs'=>'required|mimes:jpg,jpeg,gif,png|max:2048',

        ]);
        $img1=time(). '.' . $request->imgs->getClientOriginalExtension();
        $img2=time(). '.' . $request->sectionImgs->getClientOriginalExtension();

        $cat=new Gallery;
        $cat->imgs=$img1;
        $cat->sectionImgs=$img2;
        $cat->save();
        $request->imgs->move(public_path('/images'), $img1);
        $request->sectionImgs->move(public_path('/images'), $img2);

        return redirect('admin/gallery');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        return view('admin/gallery',compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $user=Gallery::find($id);
         return view('admin.gallery.edit',compact('user'));
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
        
        $user=Gallery::find($id);
        if($request->imgs == null || $request->sectionImgs == null)
        {
            $request->imgs=$user->imgs;
            $request->sectionImgs=$user->sectionImgs;

        }
        else{
            $img_name=time(). '.' . $request->imgs->getClientOriginalExtension();
            $user->imgs=$img_name;
            $request->imgs->move(public_path('/images'), $img_name);
            $img_name=time(). '.' . $request->sectionImgs->getClientOriginalExtension();
            $user->sectionImgs=$img_name;
            $request->sectionImgs->move(public_path('/images'), $img_name);

        }

        $user->save();
        
        return redirect('admin/gallery');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat= Gallery::find($id);
        $cat->destroy($id);    
        return redirect("admin/gallery");
    }
}
