

@extends ('admin.layouts.layout');

@section('title','curdAdmin')


@section("content")

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Class Section</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
             
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
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="frm-add-section" method="POST" action="{{route('addSectionclass')}}" >
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="section_name">Section  Name </label>
                    <input type="text" class="form-control" id="section_name"  Name="section_name"placeholder="Enter Section Name">
                  </div>
                  <div class="form-group">
                    <label for="dd_status">Status</label>
                 <select name="dd_status" id="dd_status" class="form-control" >
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