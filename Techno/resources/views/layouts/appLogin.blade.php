<!DOCTYPE html>
<html>
<head>
<title>
</title>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="bootstrap3/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="bootstrap3/css/freelancer.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="bootstrap3/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
   <link href="bootstrap3/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="bootstrap3/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap3/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="bootstrap3/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="bootstrap3/js/freelancer.min.js"></script>
</head>
<body id="page-top" class="index">
 <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>

                <a class="navbar-brand" href="{{url('/home')}}">Bengkel Online</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="{{url('/home')}}" class="glyphicon glyphicon-home">Home</a>
                    </li>
            <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="">Kategori
        <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="{{url('pesananReserve')}}">Panggilan Teknisi</a></li>
          <li><a href="">Suku Cadang</a></li>
          <li><a href="{{url('pesananFuel')}}">Bahan Bakar</a></li>
            <li><a href="">Langganan Service</a></li>
        </ul>
      </li>
       <li>
                        <a href="{{url('daftarteknisi')}}">Daftar Teknisi</a>
                    </li>
         <li>
           <a href="{{url('totalPesanan')}}"><span class="glyphicon glyphicon-shopping-cart">Keranjang</span></a>
          </li>


                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>

                            </li>
                @endif
                </ul>
            </ul>
            </div>
            </div>
            </nav>

        @yield('content')
</body>
<footer class="text-center">

       <div class="footer-below">
           <div class="container">
               <div class="row">
                   <div class="col-lg-12">
                       Copyright &copy; Nairasaon Group
                   </div>
               </div>
           </div>
       </div>
   </footer>
</html>
