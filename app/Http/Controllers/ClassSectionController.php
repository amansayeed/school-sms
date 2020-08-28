<?php

namespace App\Http\Controllers;

use App\Models\ClassSection;

use Illuminate\Http\Request;
use Datatables;
use DB;

class ClassSectionController extends Controller
{
    public function addSchoolSection()
    {
       return  view('admin.views.addsection');
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
