<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Shop :: Administrative Panel</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/dropzone/min/dropzone.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/summernote/summernote.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/custom.css')}}">
    <meta name="csrf-token" content="{{csrf_token()}}">
</head>

<!-- /.navbar -->
<!-- Main Sidebar Container -->

<!-- Content Wrapper. Contains page content -->


@include('admin.common.header')
@yield('content')
@include('admin.common.sidebar')





<footer class="main-footer">

    <strong>Copyright &copy; 2023 AmazingShop All rights reserved.
</footer>

</div>
<!-- ./wrapper -->
<!-- jQuery -->




<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/plugins/dropzone/min/dropzone.min.js')}}"></script>
<script src="{{asset('admin/plugins/select2/js/select2.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/js/demo.js')}}"></script>


<script src="{{asset('admin/plugins/summernote/summernote.min.js')}}"></script>

<script type="text/javascript">
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

        $(document).ready(function(){
            $(".summernote").summernote({
                height:250
            });
           
        });
</script>


@yield('customJs')

</body>

</html>