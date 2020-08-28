
@extends ('admin.layouts.layout');

@section('title','curdAdmin')


@section("content")

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">List Student Section</h1>
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
      <div class="col-md10 m-auto ">
            <!-- general form elements -->
            <table class="table table-bordered" id="listAllStudent">
               <thead>
                  <tr>
                  <th>Id</th>
                                <th>Image</th>
                                <th>Faculty Type</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone No</th>
                                <th>Gender</th>
                                <th>Status</th>
                                <th>Action</th>
                     
                  </tr>
               </thead>
            </table>
        
          

         
       
          

          </div>
        
    
    </section>
    <!-- /.content -->
  </div>

@endsection