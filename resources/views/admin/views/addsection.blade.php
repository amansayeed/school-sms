

@extends ('admin.layouts.layout');

@section('title','curdAdmin')


@section("content")

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">AddSection</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('addclasssection')}}">AddSection</a></li>
             
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
              <form role="form" id="frm-add-section" method="" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="section_ Name">Section Name </label>
                    <input type="text" class="form-control" id="section_ Name"  Name="Section_name"placeholder="Enter Section Name">
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