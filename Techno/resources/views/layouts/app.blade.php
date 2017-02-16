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
    <link href="bootstrap3/css/freelancer.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="bootstrap3/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
   <link href="bootstrap3/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap3/vendor/jquery/jquery.min.js"></script>
    <script src="bootstrap3/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="bootstrap3/js/contact_me.js"></script>
    <script src="bootstrap3/js/freelancer.min.js"></script>
</head>
<body id="page-top" class="index">
 <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{url('/home')}}">Bengkel Online</a>
            </div>
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
          <li><a href="{{ url('/login') }}">Panggilan Teknisi</a></li>
          <li><a href="{{ url('/login') }}">Suku Cadang</a></li>
          <li><a href="{{ url('/login') }}">Bahan Bakar</a></li>
            <li><a href="{{ url('/login') }}">Langganan Service</a></li>
        </ul>
      </li>
         <li class="page-scroll">
                        <a href="{{url('daftarteknisi')}}">Daftar Teknisi</a>
                    </li>
          <li>
          <a href="{{ url('/login') }}"><span class="glyphicon glyphicon-shopping-cart"> Keranjang</span></a>
          </li>
          <li>
          <a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"> Login</span></a>
          </li>
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
