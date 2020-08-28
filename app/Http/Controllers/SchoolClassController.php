<?php

namespace App\Http\Controllers;

use App\Models\SchoolClass;
use App\Models\ClassSection;
use Illuminate\Http\Request;
use Datatables;
use DB;
use Validator;
class SchoolClassController extends Controller
{

    public function addSchoolclass()
    {        
       $all_section= ClassSection::where(['status'=>1])->get();

        return view('admin.views.addclass',['sections'=>$all_section]);
    }


    public function listSchoolclass()
    {
        return view('admin.views.listClass');
    }
    public function listAllClass()
    {
        
       


        $classes_query=DB::table("tbl_classes as class")
        ->select("class.*","section.section")
        ->leftjoin("tbl_class_sections as section","class.class_section_id","=","section.id")
        ->where(["class.status"=>1])
        ->get();
       // print_r($classes_query);
        return Datatables::of( $classes_query)->
        editColumn("action_btns", function( $classes_query) {

            return '<a href="#" class="btn btn-info class-section-edit" data-id="' . $classes_query->id . '">Edit</a>'." "
                     .'<a href="#" class="btn btn-danger class-section-delete" data-id="' . $classes_query->id . '" >Delete</a>';
        })
        
        ->rawColumns(["action_btns", "status"])
       ->make(true);
    }

    public function addSchoolFullclass( Request $request)
    {
       // print_r($request->all());

       $validator = Validator::make(array(
        "class_name"=>$request->class_name,
        "class_section"=>$request->class_section,
        "seats"=>$request->seats,

    ),array(
        "class_name"=>"required|min:5",
        "class_section"=>"required|not_in:-1",
        "seats"=>"required",

    ));

    if($validator->fails()){

        return redirect("addclass")->withErrors($validator)->withInput();
    }else{

        // successfully we have passed our form
        $section = new SchoolClass;
        //$print_r($section);
        $section->name = $request->class_name;
        $section->class_section_id = $request->class_section;
        $section->seats_available = $request->seats;
        $section->status = $request->class_status;

        $section->save();

        $request->session()->flash("message","Class Section has been created successfully");

        return redirect("addclass");

    }
}

}
