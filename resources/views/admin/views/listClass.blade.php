

@extends ('admin.layouts.layout');

@section('title','curdAdmin')


@section("content")

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">List Section</h1>
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
            <table class="table table-bordered" id="listclass">
               <thead>
                  <tr>
                     <th>Id</th>
                     <th>Name </th>
                     <th> Class Section Id </th>
                     <th>Seats Available</th>
                    
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