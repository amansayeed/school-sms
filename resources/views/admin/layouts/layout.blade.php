<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yeild("title")</title>



{{--include styles--}}


@include('admin.layouts.styles')





  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
 {{--include header nav--}}
 @include('admin.layouts.header');
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 {{--leftsidebar--}}
 @include('admin.layouts.leftsidebar')

  <!-- Content Wrapper. Contains page content -->
{{--dynimic content--}}
@section('content')

@show

  <!-- /.content-wrapper -->
  {{--include footer--}}
 @include('admin.layouts.footer')


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->




{{---include scripts ---}}


@include('admin.layouts.scripts')







</body>
</html>
