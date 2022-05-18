<?php

namespace App\Modules\Color\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Color\Models\Color;
use Auth;
use Illuminate\Support\Facades\DB;

class ColorController extends Controller
{

    public function welcome()
    {
        $data=color::where('user_id')->get();
    	return view('Color::index',['color'=>$data]);
    }
    public function edit($id)
    {
    $color = Color::find($id);
    return view('Color::edit', compact('color'));
    }
    public function update(request $request, $id)
    {
        $request-> validate([
            'name'=>'required |alpha|min:3|max:10|regex:/^\S*$/u',
        ]);

        $color = Color::find($id);
        $color->name=$request->name;
        $color-> update();
        $data=Color::all();
        return back()->with('success','Item created successfully!');   

    }


    public function formdata(){
        return view('Color::add');
    }
    public function getdata(Request $request){
        $request-> validate([
            'name'=>'required |alpha|unique:color|regex:/^\S*$/u',
        ]);
        

        $user_id = Auth::user()->id;
        
         $color =new Color;
      
         $color->name=$request->name;
         $color->user_id=$user_id;
         $color-> save();
         return back()->with('success','Item created successfully!');   
        
         $data=color::all();
    
    }
   
}
