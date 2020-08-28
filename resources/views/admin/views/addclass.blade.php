

@extends ('admin.layouts.layout');

@section('title','curdAdmin')


@section("content")

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">AddClass</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('addclass')}}">AddClass</a></li>
             
            </ol>
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
                <h3 class="card-title">Add Class Sections</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="frm-add-class" method="" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="class_name">Class Name </label>
                    <input type="text" class="form-control" id="class_name"  Name="class_name"placeholder="Enter Class Name">
                  </div>

                  <div class="form-group">
                    <label for="class_section">Choose Section</label>
                 <select name="class_section" id="status" class="form-control" >
                     <option value="1">A</option>
                     <option value="2">B</option>
                     <option value="3">C</option>
                     <option value="4">D</option>
                 </select>
                  </div>

                  <div class="form-group">
                    <label for="seats">Seats  </label>
                    <input type="number" class="form-control" id="seats"  Name="seats"placeholder="Enter Seats" min="1">
                  </div>





                  <div class="form-group">
                    <label for="status"> class Status</label>
                 <select name="class_status" id="class_status" class="form-control" >
                     <option value="1">Active</option>
                     <option value="0">Inactive</option>
                 </select>
                  </div>
                  
                  

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