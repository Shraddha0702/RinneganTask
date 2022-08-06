<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\school;
use Illuminate\Support\Facades\DB;

class school_controller extends Controller
{
    function add(Request $request)
    {
        $school = new school();
        $school->name = $request->name;
        $school->address = $request->address;
        $school->city = $request->city;
        $school->state = $request->state;
        $school->contact_number = $request->contact;
        $school->email_id = $request->email;

        if ($request->has("image")) {

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = random_int(10, 99999) . '.' . $extension;
            $file->move('schools_image/', $filename);
            //$inspectionPhotosModel->photo_name=$filename;  

            //   $a=34;
            //   $att=DB::update("update inspection_response set answer='$filename' where attribute_id='$a' and order_id='$order' and subcategory_id=$subcategory_id");


        }
        $school->image = $filename;
        $school->save();
        return redirect()->route('display')->with('result','Post added successfully');
    }

    function display()
    {
        $data=DB::select("select * from schools order by id desc");
        return view('/dummy',['data'=>$data]);
    }

    function detail($id)
    {
        $data=DB::table('schools')->select('*')->where('id',$id)->get();
        return view('detail',['data'=>$data]);
    }
}
