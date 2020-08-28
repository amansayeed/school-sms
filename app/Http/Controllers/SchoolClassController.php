<?php

namespace App\Http\Controllers;

use App\Models\SchoolClass;
use Illuminate\Http\Request;
use Datatables;
use DB;

class SchoolClassController extends Controller
{

    public function addSchoolclass()
    {
        return view('admin.views.addclass');
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

}
