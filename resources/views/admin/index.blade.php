<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="{{URL::to('images/favico.png')}}">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ucfirst(Auth::user()->name)}} | IEEE</title>
  <!-- Tell the browser to be responsive to screen width -->

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->

  <link rel="stylesheet" href="{{URL::to('design/adminlte')}}/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{URL::to('design/adminlte')}}/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{URL::to('design/adminlte')}}/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL::to('design/adminlte')}}/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{URL::to('design/adminlte')}}/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="{{URL::to('design/adminlte')}}/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <link rel="stylesheet" href="{{URL::to('css')}}/admin_style.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{URL::to('admin')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>IEEE</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">IEEE PUA SB</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{URL::to('design/adminlte')}}/dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ucfirst(Auth::user()->name)}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{URL::to('design/adminlte')}}/dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  IEEE {{ucfirst(Auth::user()->name)}}
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div>
                  <a href="{{route('logout')}}" class="btn btn-default btn-flat" style="width: 100%">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>


    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  @include('admin.layouts.assider')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
        <section class="content">
        
        @yield('content')
        </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b></b> 
    </div>
    <strong>IEEE PUA SB</strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{URL::to('design/adminlte')}}/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{URL::to('design/adminlte')}}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="{{URL::to('design/adminlte')}}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{URL::to('design/adminlte')}}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- ckeditor -->
<script src="{{ URL::to('design/adminlte') }}/bower_components/ckeditor/ckeditor.js"></script>
<!-- AdminLTE App -->
<script src="{{URL::to('design/adminlte')}}/dist/js/adminlte.min.js"></script>

<!--<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>-->

<script src="{{URL::to('js/sweetalert.min.js')}}"></script>
<script src="{{URL::to('js/admin_alerts.js')}}"></script>

@if(isset($script))
  @if(is_string($script))
<script src="{{URL::to('js/'.$script.'.js')}}"></script>
  @elseif(is_array($script))
    @foreach($script as $s)
      <script src="{{URL::to('js/'.$s.'.js')}}"></script>
    @endforeach
  @endif
@endif



@if (Session::has('success'))
    <script type="text/javascript">window.onload=function(){
      suc("{!! Session::get('success') !!}");
  }</script>
@endif

@if (Session::has('error'))
    <script type="text/javascript">window.onload=function(){
      err("{!! Session::get('error') !!}");
  }</script>
@endif
@yield('script')
<script>
  $(function () {
    $("#mega_attendees").DataTable();
  });
</script>
<script>
  CKEDITOR.replace('description');
  CKEDITOR.replace('ar-description');
</script>
</body>
</html>
