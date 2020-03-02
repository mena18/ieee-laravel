<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title') IEEE</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{URL::to('fonts/glyphicons-halflings-regular.eot')}}"  rel="MIME">
    <link href="{{URL::to('fonts/glyphicons-halflings-regular.svg')}}"  rel="MIME">
    <link href="{{URL::to('fonts/glyphicons-halflings-regular.ttf')}}"  rel="MIME">
    <link href="{{URL::to('fonts/glyphicons-halflings-regular.woff')}}"  rel="MIME">
    <link href="{{URL::to('fonts/glyphicons-halflings-regular.woff2')}}" rel="MIME">

    <link href="{{URL::to('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{URL::to('css/blog-home.css')}}" rel="stylesheet">
    <style type="text/css">
        .up{
            margin-top:100px;
        }
    </style>
    @yield('style')

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{URL::to('')}}">IEEE</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{URL::to('admin')}}">Admin</a>
                    </li>
                    <li>
                        <a href="{{route('event.home')}}">Events</a>
                    </li>
                    <li>
                        <a href="{{route('mega.home')}}">Mega Events</a>
                    </li>
                    <li>
                        <a href="{{route('news.home')}}">News</a>
                    </li>
                    <li>
                        <a href="{{route('volunteer.home')}}">Volunteers</a>
                    </li>
                    <li>
                        <a href="{{route('gallery.home')}}">Gallery</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}">Log out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="up"></div>
    <!-- /.container -->
    <div class="container">
        @yield('content')
    </div>
    <!-- jQuery -->


    <script src="{{URL::to('js/jquery.js')}}"></script>
    <script src="{{URL::to('js/bootstrap.min.js')}}"></script>

    @yield('script')


</body>

</html>
