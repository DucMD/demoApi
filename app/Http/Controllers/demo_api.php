<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\acounts;
class demo_api extends Controller
{
   
    public function index()
    {
        return acounts::all();
    }

    public function store(Request $request)
    {
        $requestData = new acounts;
        $requestData->id = $request->id;
        $requestData->name = $request->name;
        $requestData->email = $request->email;
        $requestData->password =$request->password;
        $requestData->save();
        return 'Thêm thành công';
        //return acounts::create($request->all());
        
    }

    public function show($id)
    {
        return acounts::all()->where('id',$id)->orWhere('name','LIKE','%'.$id.'%')->get();
        // return acounts::all()->where(function($re,$id){
        //     $re->where('id',$id)
        //         ->orWhere('name','LIKE','%'.$id.'%')->get();
        // });
    }
   

    
    public function update(Request $request, $id)
    {
        $update = acounts::where('id',$id)
            ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' =>$request->password
            ]);
            return 'Sửa thành công';
    }

    
    public function destroy($id)
    {
        $delete = acounts::find($id)->delete();
        return 'Xoá thành công';
    }
}
