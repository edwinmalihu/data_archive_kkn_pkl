
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    
    <title>Login | Arsip Laporan PKL dan KKN</title>
    
    <link rel="apple-touch-icon" href="{{asset('clasic/topbar/assets/images/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('clasic/topbar/assets/images/LOGO-UNMUS-1.png')}}">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('clasic/global/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('clasic/global/css/bootstrap-extend.min.css')}}">
    <link rel="stylesheet" href="{{asset('clasic/topbar/assets/css/site.min.css')}}">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('clasic/global/vendor/animsition/animsition.css')}}">
    <link rel="stylesheet" href="{{asset('clasic/global/vendor/asscrollable/asScrollable.css')}}">
    <link rel="stylesheet" href="{{asset('clasic/global/vendor/switchery/switchery.css')}}">
    <link rel="stylesheet" href="{{asset('clasic/global/vendor/intro-js/introjs.css')}}">
    <link rel="stylesheet" href="{{asset('clasic/global/vendor/slidepanel/slidePanel.css')}}">
    <link rel="stylesheet" href="{{asset('clasic/global/vendor/flag-icon-css/flag-icon.css')}}">
        <link rel="stylesheet" href="{{asset('clasic/topbar/assets/examples/css/pages/login.css')}}">
    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('clasic/global/fonts/web-icons/web-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('clasic/global/fonts/brand-icons/brand-icons.min.css')}}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    
    <!--[if lt IE 9]>
    <script src="../../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="../../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="{{asset('clasic/global/vendor/breakpoints/breakpoints.js')}}"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition page-login layout-full page-dark">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


    <!-- Page -->
    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
      <div class="page-content vertical-align-middle animation-slide-top animation-duration-1">
        <div class="brand">
          <img class="brand-img" src="{{asset('clasic/topbar/assets/images/LOGO-UNMUS-1.png')}}" width="50" alt="...">
          <h2 class="brand-text">Informatika UNMUS</h2>
        </div>
        <p>Selamat Datang, Silahkan Masuk ke Akun Anda</p>
        @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        @if(session()->has('pesan'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('pesan')}}
          </div>
        @endif  

        @if(session()->has('logout'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('logout')}}
          </div>
        @endif  
        <form method="post" action="/login">
        @csrf
          <div class="form-group">
            <label class="sr-only" for="inputnpm">NPM</label>
            <input type="text" class="form-control @error('npm_nip') is-invalid @enderror" id="inputnpm" name="npm_nip" placeholder="NPM atau NIDN" autofocus>
            @error('npm_nip')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label class="sr-only" for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" name="password"
              placeholder="Kata Sandi">
          </div>
          <div class="form-group clearfix">
            <div class="checkbox-custom checkbox-inline checkbox-primary float-left">
              <input type="checkbox" id="inputCheckbox" name="remember">
              <label for="inputCheckbox">Ingat Saya</label>
            </div>
            <a class="float-right" href="/forgot">Lupa Password ?</a>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Sign in</button>
        </form>
        <p>Tidak Punya Akun ? Daftar <a href="/register">Disini</a></p>

        <footer class="page-copyright page-copyright-inverse">
          <p>WEBSITE BY Teknik Informatika</p>
          <p>© 2022. UNIVERSITAS MUSAMUS</p>
          <div class="social">
            <a class="btn btn-icon btn-pure" href="javascript:void(0)">
          <i class="icon bd-twitter" aria-hidden="true"></i>
        </a>
            <a class="btn btn-icon btn-pure" href="javascript:void(0)">
          <i class="icon bd-facebook" aria-hidden="true"></i>
        </a>
            <a class="btn btn-icon btn-pure" href="javascript:void(0)">
          <i class="icon bd-dribbble" aria-hidden="true"></i>
        </a>
          </div>
        </footer>
      </div>
    </div>
    <!-- End Page -->


    <!-- Core  -->
    <script src="{{asset('clasic/global/vendor/jquery/jquery.js')}}"></script>
    <script src="{{asset('clasic/global/vendor/babel-external-helpers/babel-external-helpers.js')}}"></script>
    <script src="{{asset('clasic/global/vendor/popper-js/umd/popper.min.js')}}"></script>
    <script src="{{asset('clasic/global/vendor/bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('clasic/global/vendor/animsition/animsition.js')}}"></script>
    <script src="{{asset('clasic/global/vendor/mousewheel/jquery.mousewheel.js')}}"></script>
    <script src="{{asset('clasic/global/vendor/asscrollbar/jquery-asScrollbar.js')}}"></script>
    <script src="{{asset('clasic/global/vendor/asscrollable/jquery-asScrollable.js')}}"></script>
    
    <!-- Plugins -->
    <script src="{{asset('clasic/global/vendor/switchery/switchery.js')}}"></script>
    <script src="{{asset('clasic/global/vendor/intro-js/intro.js')}}"></script>
    <script src="{{asset('clasic/global/vendor/screenfull/screenfull.js')}}"></script>
    <script src="{{asset('clasic/global/vendor/slidepanel/jquery-slidePanel.js')}}"></script>
        <script src="{{asset('clasic/global/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>
    
    <!-- Scripts -->
    <script src="{{asset('clasic/global/js/Component.js')}}"></script>
    <script src="{{asset('clasic/global/js/Plugin.js')}}"></script>
    <script src="{{asset('clasic/global/js/Base.js')}}"></script>
    <script src="{{asset('clasic/global/js/Config.js')}}"></script>
    
    <script src="{{asset('clasic/topbar/assets/js/Section/Menubar.js')}}"></script>
    <script src="{{asset('clasic/topbar/assets/js/Section/Sidebar.js')}}"></script>
    <script src="{{asset('clasic/topbar/assets/js/Section/PageAside.js')}}"></script>
    <script src="{{asset('clasic/topbar/assets/js/Plugin/menu.js')}}"></script>
    
    <!-- Config -->
    <script src="{{asset('clasic/global/js/config/colors.js')}}"></script>
    <script src="{{asset('clasic/topbar/assets/js/config/tour.js')}}"></script>
    <script>Config.set('assets', "{{asset('clasic/topbar/assets')}}");</script>
    
    <!-- Page -->
    <script src="{{asset('clasic/topbar/assets/js/Site.js')}}"></script>
    <script src="{{asset('clasic/global/js/Plugin/asscrollable.js')}}"></script>
    <script src="{{asset('clasic/global/js/Plugin/slidepanel.js')}}"></script>
    <script src="{{asset('clasic/global/js/Plugin/switchery.js')}}"></script>
        <script src="{{asset('clasic/topbar/assets/js/Plugin/jquery-placeholder.js')}}"></script>
    
    <script>
      (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    </script>
    
  </body>
</html>
