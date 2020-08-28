

@extends ('admin.layouts.layout');

@section('title','curdAdmin')


@section("content")

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Student </h1>
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
                <h3 class="card-title">Add Student  </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="frm-add-student" method="" >
                <div class="card-body">

                <div class="form-group">
                    <label for="reg_Name">Registration Number </label>
                    <input type="text" class="form-control" id="reg_Name"  Name="reg_Name"placeholder="Enter Registration Number">
                  </div>
                <div class="form-group">
                    <label for="Student_gender">Student Gender</label>
                 <select name="Student_gender" id="Student_gender" class="form-control" >
                     <option value="1">Male  </option>
                     <option value="2">Female</option>
                 </select>
                  
                  
                  <div class="form-group">
                    <label for="Student_Name">Student Name </label>
                    <input type="text" class="form-control" id="Student_Name"  Name="StudentName"placeholder="Enter Student  Name">
                  </div>
                  <div class="form-group">
                    <label for="Student_email">Student  Email </label>
                    <input type="email" class="form-control" id="Student_email"  Name="Student_eamil"placeholder="Enter Student Email">
                  </div>
                  <div class="form-group">
                    <label for="Student_designation">Students RollNumber  </label>
                    <input type="text" class="form-control" id="Student_designation"  Name="Student_designation"placeholder="Enter Student RollNumber ">
                  </div>

                  <div class="form-group">
                    <label for="Students_mobile">Student Mobile Number   </label>
                    <input type="text" class="form-control" id="Students_mobile"  Name="Students_mobile"placeholder="Enter Student Mobile Number ">
                  </div>
             
                  <div class="form-group">
                    <label for="Students_Address">Student Address  </label>
                    <input type="text" class="form-control" id="Students_Address"  Name="Students_Address"placeholder="Enter Student Address  ">
                  </div>
                  

                 <div class="form-group">
                    <label for="exampleInputFile">Student Picture</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>

                 <div class="form-group">
                    <label for="father_name">Father Names  </label>
                    <input type="text" class="form-control" id="father_name"  Name="father_name"placeholder="Enter Father Names">
                  </div>

                  <div class="form-group">
                    <label for="mother_name">Mother Names  </label>
                    <input type="text" class="form-control" id="mother_name"  Name="mother_name"placeholder="Enter Mother Names">
                  </div>

               

                  <div class="form-group">
                    <label for="student_age">Age  </label>
                    <input type="text" class="form-control" id="student_age"  Name="student_age"placeholder="Enter Age">
                  </div>


                  <div class="form-group">
                    <label for="student_status">Student Status</label>
                 <select name="student_status" id="student_status" class="form-control" >
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