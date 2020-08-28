<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\FacultyType;
use App\Models\Gender;
use Illuminate\Http\Request;
use Datatables;
use DB;

class FacultyController extends Controller
{
    public function addFaculties()
    {   
        $all_section=FacultyType::where(['status'=>1])->get();
        $all_Gender=Gender::where(['status'=>1])->get();

        return view('admin.views.add-faculty',['faculties'=>$all_section,"genders"=>$all_Gender]);
    }

    public function listFaculties()
    {
        return view("admin.views.list-all-faculty");
    }
    
    public function listAllFaculties()
    {
            
        $faculties_query = DB::table("tbl_faculties as faculty")
                ->select("faculty.*", "gender.type as gender_name", "type.type as faculty_type")
                ->leftJoin("tbl_genders as gender", "gender.id", "=", "faculty.gender_id")
                ->leftJoin("tbl_faculty_types as type", "type.id", "=", "faculty.faculty_type_id")
                ->where(["faculty.status" => 1])
                ->get()
        ;

        return Datatables::of($faculties_query)
                        ->editColumn("type", function($faculties_query) {

                            return ucfirst($faculties_query->faculty_type);
                        })
                        ->editColumn("profile_photo", function($faculties_query) {

                            return '<img src="' . $faculties_query->profile_photo . '"/>';
                        })
                        ->editColumn("gender", function($faculties_query) {

                            return ucfirst($faculties_query->gender_name);
                        })
                        ->editColumn("action_btns", function($faculties_query) {

                            return '<a href="#" class="btn btn-info class-section-edit" data-id="' . $faculties_query->id . '">Edit</a><a href="#" class="btn btn-danger class-section-delete" data-id="' . $faculties_query->id . '">Delete</a>';
                        })
                        ->rawColumns(["action_btns", "profile_photo"])
                        ->make(true);
    }

    public function addFacultiesdetail(Request $request)
    {
        return $request->all();
    }
}
