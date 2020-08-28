<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

DataTables
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>


<!-- 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> -->

<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>

<script>
  
         $(function() {


          if( $('#liastclassSection').length>0)
          {
            $('#liastclassSection').DataTable({
               processing: true,
               serverSide: true,
               ajax: '{{ route('getClassSection') }}',
               columns: [
                        { data: 'id', name: 'id' },
                        { data: 'section', name: 'section' },
                      
                        { data: 'status', name: 'status' },
                        { data: 'action_btns', name: 'action_btns' }
                     ]
            });
          }


           
         });


      
         </script>
         <script>
             $(function() {
              if( $('#listclass').length>0)
          {
            $('#listclass').DataTable({
               processing: true,
               serverSide: true,
               ajax: '{{ route('getAllClass') }}',
               columns: [
                        { data: 'id', name: 'id' },
                        { data: 'name', name: 'name' },
                        { data: 'class_section_id', name: 'class_section_id' },
                        { data: 'seats_available', name: 'seats_available' },
                       
                        { data: 'status', name: 'status' },
                        { data: 'action_btns', name: 'action_btns' }
                     ]
            });
          }


           
        });</script>


<script>
             $(function() {
              if( $('#listAllFacultytype').length>0)
          {
            $('#listAllFacultytype').DataTable({
               processing: true,
               serverSide: true,
               ajax: '{{ route('listAlltype') }}',
               columns: [
                        { data: 'id', name: 'id' },
                        { data: 'type', name: 'type' },
                        { data: 'status', name: 'status' },
                        { data: 'action_btns', name: 'action_btns' }
                     ]
            });
          }


           
        });</script>
        <script>
             $(function() {
              if( $('#listAllFaculties').length>0)
          {
            $('#listAllFaculties').DataTable({
               processing: true,
               serverSide: true,
               ajax: '{{ route('list-All-faculty') }}',
               columns: [
                { data: 'id', name: 'id' },
                        { data: 'reg_no', name: 'reg_no' },
                        { data: 'gender_id', name: 'gender_id' },
                        { data: 'name', name: 'name' },
                        { data: 'email', name: 'email' },
                        { data: 'roll_no', name: 'roll_no' },
                        { data: 'profile_photo', name: 'profile_photo' },
                        { data: 'father_name', name: 'father_name' },
                        { data: 'mother_name', name: 'mother_name' },
                        { data: 'status', name: 'status' },
                        { data: 'action_btns', name: 'action_btns' },
                     ]
            });
          }


           
        });</script>
             <script>
             $(function() {
              if( $('#listAllStudent').length>0)
          {
            $('#listAllStudent').DataTable({
               processing: true,
               serverSide: true,
               ajax: '{{ route('list-all-student') }}',
               columns: [
                { data: 'reg_no', name: 'reg_no' },
                        { data: 'profile_photo', name: 'profile_photo' },
                        { data: 'name', name: 'name' },
                        { data: 'email', name: 'email' },
                        { data: 'phone_no', name: 'phone_no' },
                        { data: 'roll_no', name: 'roll_no' },
                        { data: 'gender', name: 'gender' },
                        { data: 'status', name: 'status' },
                        { data: 'action_btns', name: 'action_btns' },
                      
                     ]
            });
          }


           
        });</script>