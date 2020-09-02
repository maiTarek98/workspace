<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use DB;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=Customer::all();
        return view('admin.customer.index',compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customer.create');
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
            
            'logo'=>'required|mimes:jpg,jpeg,gif,png|max:2048',
        ]);
        $img_name=time(). '.' . $request->logo->getClientOriginalExtension();
        $cat=new Customer;
        $cat->logo=$img_name;
        $cat->save();
        $request->logo->move(public_path('/images'), $img_name);
        return redirect('admin/customer');
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
         $user=Customer::find($id);
         return view('admin.customer.edit',compact('user'));
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
        
        $user=Customer::find($id);
        if($request->logo == null)
        {
            $request->logo=$user->logo;
        }
        else{
            $img_name=time(). '.' . $request->logo->getClientOriginalExtension();
            $user->logo=$img_name;
            $request->logo->move(public_path('/images'), $img_name);

        }
        $user->save();
        
        return redirect('admin/customer');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat= Customer::find($id);
        $cat->destroy($id);    
        return redirect("admin/customer");
    }
}
