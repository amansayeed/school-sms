

@extends ('admin.layouts.layout');

@section('title','curdAdmin')


@section("content")

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Faculty Type</h1>
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
                <h3 class="card-title">Add Faculty Type</h3>
                @if(session()->has("message"))
                    <div class="alert alert-success">
                        <p>{{ session('message') }}</p>
                    </div>
                    @endif

                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                        @endforeach
                    </div>
                    @endif
              </div>

              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="frm-add-faculty-type" method="POST" action="{{route('addfacultytype')}}" >

              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="faculty_type_Name">Faculty Type Name </label>
                    <input type="text" class="form-control" id="faculty_type_Name"  Name="faculty_type_Name"placeholder="Enter faculty Type Name">
                  </div>
                  <div class="form-group">
                    <label for="status">Status</label>
                 <select name="status" id="status" class="form-control" >
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