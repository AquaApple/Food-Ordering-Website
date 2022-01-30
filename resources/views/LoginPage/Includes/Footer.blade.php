</div>
 <!-- JS -->
 <script src="LoginPage/vendor/jquery/jquery.min.js"></script>
 <script src="LoginPage/js/main.js"></script>
 <!-- Toaster -->
 <script src="LoginPage/js/toaster.min.js"></script>


 @if (Session()->has('Success'))
<script>
  toastr.success("{{Session()->get('Success')}}")
</script>
@endif

</body>
</html>

