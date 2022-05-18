<?php

namespace App\Modules\Size\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Size\Models\Size;
use Auth;
use Illuminate\Support\Facades\DB;

class SizeController extends Controller
{

    public function welcome()
    {
        $data=size::where('user_id')->get();
    	return view('Size::index',['Size'=>$data]);
    }
    public function edit($id)
    {
    $size = Size::find($id);
    return view('Size::edit', compact('size'));
    }
    public function update(request $request, $id)
    {
        $request-> validate([
            'name'=>'required |alpha|min:3|max:10|regex:/^\S*$/u',
        ]);

        $size = Size::find($id);
        $size->name=$request->name;
        $size-> update();
        $data=Size::all();
        return back()->with('success','Item created successfully!');   

    }


    public function formdata(){
        return view('Size::add');
    }
    public function getdata(Request $request){
        $request-> validate([
            'name'=>'required |alpha|unique:size|regex:/^\S*$/u',
        ]);
        

         $user_id = Auth::user()->id;
        
         $size =new Size;
      
         $size->name=$request->name;
         $size->user_id=$user_id;
         $size-> save();
         return back()->with('success','Item created successfully!');   
        
         $data=size::all();
    
    }
   
}
