<?php

namespace App\Http\Controllers;

use App\Models\ClassSection;

use Illuminate\Http\Request;
use Datatables;
use DB;
use Validator;

class ClassSectionController extends Controller
{
    public function addSchoolSection()
    {
       return  view('admin.views.addsection');
    }


    public function addClassSection(Request $request){

    $validator = Validator::make(array(
        "section"=>$request->section_name
    ),array(
        "section"=>"required|unique:tbl_class_sections"
    ));

    if($validator->fails()){

        return redirect("addSection")->withErrors($validator)->withInput();
    }else{

        // successfully we have passed our form
        $section = new ClassSection;
        //$print_r($section);
        $section->section = $request->section_name;
        $section->status = $request->dd_status;

        $section->save();

        $request->session()->flash("message","Class Section has been created successfully");

        return redirect("addSection");
    }



    }

    public function listSchoolSection()
    {
        return view('admin.views.listclassSection');
    }
    public function listAllclassSection()
    {
             $students_sections=ClassSection::query();
        //     $classes_query=DB::table("tbl_classes as class")
        // ->select("class.*","section.section")
        // ->leftjoin("tbl_class_sections as section","class.class_section_id","=","section.id")
        // ->where(["class.status"=>1])
        // ->get();
        // print_r($classes_query);
       
            return Datatables::of($students_sections)->
            editColumn("action_btns", function($students_sections) {
    
                return '<a href="#" class="btn btn-info class-section-edit">Edit</a>'." "
                         .'<a href="#" class="btn btn-danger class-section-delete" >Delete</a>';
            })
            
            ->rawColumns(["action_btns", "status"])
           ->make(true);
    }

}
