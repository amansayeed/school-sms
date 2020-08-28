<?php

namespace App\Http\Controllers;

use App\Models\FacultyType;
use Illuminate\Http\Request;
use Datatables;
use Validator;

class FacultyTypeController extends Controller
{
    public function addFacultytype()
    {

       return view('admin.views.add-faculty-type');
    }

    public function listFacultytype()
    {

        return view("admin.views.list_faculty-type");
    }

 
    
    public function listAllFacultytype()
    {

        $students_sections=FacultyType::query();
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

    public function submitFacultytype( Request $request)

    {

        //print_r($request->all());

       $validate= Validator::make(
            array(
                "faculty_type_Name"=>$request->faculty_type_Name,
                "status"=>$request->status

            ),
            array(
                "faculty_type_Name"=>"required|min:5",
                "status"=>"required"

            )

            );


                if($validate->fails())
                {

                    return redirect("addtype")->withErrors($validate)->withInput();
                }
                else 
                {
                    $section= new FacultyType;
                    $section->type = $request->faculty_type_Name;
                    $section->status=$request->status;
                    $section->save();

                    $request->session()->flash("message","Class Section has been created successfully");
            
                    return redirect("addtype");


                }




    }

}
