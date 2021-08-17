<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB ;
class CustomerCrd extends Controller
{   
    public function add_post()
    {
        return view('data_insert');
    }
    public function addpost(Request $request)
    {   
        DB ::table('customer_infos')->insert([
            'name' =>$request->name ,
            'phone' =>$request->phone ,
            'quantity' =>$request->quantity ,
            'price' =>$request->price 
        ]);
        return back()->with('post_inserted','Data has been inserted successfully!');
    }
    public function getdata()
    {
        $posts = DB::table('customer_infos')->get() ;
        return view('get_data',compact('posts'));
    }
    public function data_view($id)
    {
        $posts = DB :: table('customer_infos')->where('id',$id)->first();
        return view('data_view', compact('posts'));
    }
    public function delete_post($id)
    {
        $posts = DB :: table('customer_infos')->where('id', $id)->delete();
        return back()->with('post_deleted','Post has been deleted successfully!');
    }
    public function edit_post($id)
    {
        $posts = DB::table('customer_infos')->where('id',$id)->first();
        return view('edit-post',compact('posts'));
    }
    public function update_post(Request $request)
    {   
        DB::table('customer_infos')->where('id',$request->id)->update([
            'name' =>$request->name,
            'phone' =>$request->phone,
            'quantity' =>$request->quantity,
            'price' =>$request->price
        ]);
        return back()->with('post_updated','Post Has been updated successfully!');        
    }
}
