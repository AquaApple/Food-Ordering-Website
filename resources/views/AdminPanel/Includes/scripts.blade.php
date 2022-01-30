<!-- jQuery -->
<script src="{{asset('adminPanel/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminPanel/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminPanel/dist/js/adminlte.min.js')}}"></script>
<!-- Data Table -->
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<!-- Custom Script -->
<script src="{{asset('adminPanel/dist/js/custom.js')}}"></script>
<!-- Toaster -->
<script src="{{asset('adminPanel/dist/js/toaster.min.js')}}"></script>


@if (Session()->has('Success'))
<script>
  toastr.success("{{Session()->get('Success')}}")
</script>
@endif
</body>
</html>