

@extends ('admin.layouts.layout');

@section('title','curdAdmin')


@section("content")

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Faculty </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="col-md-8 offset-2">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Faculty </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="frm-add-faculty" method="POST" action="{{route('addfacultydetail')}}"  enctype="multipart/from-data" >
              @csrf
                <div class="card-body">


                <div class="form-group">
                    <label for="faculty_type">Faculty Type</label>
                    <select name="status" id="faculty_type" class="form-control" >
                    <option value="-1">Seclect Sections </option>
                    @if(count($faculties)>0)
                    {
                      @foreach( $faculties as $key=>$faculties )


                      {
                        <option value="{{$faculties->id}}">{{$faculties->type}}</option>
                      }
                      @endforeach

                    }
                    @endif
                 
                    
                    
                 </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="faculty_Name">Faculty  Name </label>
                    <input type="text" class="form-control" id="faculty_Name"  Name="faculty_Name"placeholder="Enter faculty  Name">
                  </div>
                  <div class="form-group">
                    <label for="faculty_email">Faculty  Email </label>
                    <input type="email" class="form-control" id="faculty_email"  Name="faculty_eamil"placeholder="Enter faculty Email">
                  </div>
                  <div class="form-group">
                    <label for="faculty_designation">Faculty Designation  </label>
                    <input type="text" class="form-control" id="faculty_designation"  Name="faculty_designation"placeholder="Enter faculty Designation">
                  </div>

                  <div class="form-group">
                    <label for="faculty_mobile">Faculty Mobile Number   </label>
                    <input type="text" class="form-control" id="faculty_mobile"  Name="faculty_mobile"placeholder="Enter faculty Mobile Number ">
                  </div>
             
                  <div class="form-group">
                    <label for="faculty_gender">Faculty Gender</label>
                 <select name="faculty_gender" id="faculty_gender" class="form-control" >
                 <option value="-1">Seclect Sections </option>
                 @if(count($genders)>0)
                    {
                      @foreach( $genders as $key=>$genders )


                      {
                        <option value="{{$genders->id}}">{{$genders->type}}</option>
                      }
                      @endforeach

                    }
                    @endif
                 
                 </select>
                  

              

                  <div class="form-group">
                                <label for="faculty_photo">Profile Photo</label>
                                <input type="file" class="form-control " id="faculty_photo" name='faculty_photo'>
                            </div>


                  

                 <div class="form-group">
                    <label for="faculty_adress">Faculty Address  </label>
                    <input type="text" class="form-control" id="faculty_adress"  Name="faculty_adress"placeholder="Enter faculty Address">
                  </div>


                  <div class="form-group">
                    <label for="faculty_status">Faculty Status</label>
                 <select name="faculty_status" id="faculty_status" class="form-control" >
                     <option value="1">Active  </option>
                     <option value="2">Inactive</option>
                 </select>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

           
          

          

         
       
            <!-- /.card -->

          </div>
        
    
    </section>
    <!-- /.content -->
  </div>

@endsection