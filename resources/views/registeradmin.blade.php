
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    
    <title>Register | Arsip Laporan PKL dan KKN</title>
    
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
        <link rel="stylesheet" href="{{asset('clasic/topbar/assets/examples/css/pages/register-v3.css')}}">
    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('clasic/global/fonts/web-icons/web-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('clasic/global/fonts/brand-icons/brand-icons.min.css')}}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    
    <!-- Scripts -->
    <script src="{{asset('clasic/global/vendor/breakpoints/breakpoints.js')}}"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition page-register-v3 layout-full">


    <!-- Page -->
    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
      <div class="page-content vertical-align-middle animation-slide-top animation-duration-1">
        <div class="panel">
          <div class="panel-body">
            <div class="brand">
              <img class="brand-img" width="50" src="{{asset('clasic/topbar/assets/images/LOGO-UNMUS-1.png')}}" alt="...">
              <h2 class="brand-text font-size-18">INFORMATIKA UNMUS</h2>
            </div>
            <form method="post" action="/registeradmin">
            @csrf
              <div class="form-group form-material floating" data-plugin="formMaterial">
                <input type="text" class="form-control" name="name" />
                <label class="floating-label">Nama Lengkap</label>
              </div>
              <div class="form-group form-material floating" data-plugin="formMaterial">
                <input type="text" class="form-control" name="npm_nip" />
                <label class="floating-label">NPM atau NIP</label>
              </div>
              <div class="form-group form-material floating" data-plugin="formMaterial">
                <input type="text" class="form-control" name="fakultas" />
                <label class="floating-label">Fakultas</label>
              </div>
              <div class="form-group form-material floating" data-plugin="formMaterial">
                <input type="text" class="form-control" name="jurusan" />
                <label class="floating-label">Jurusan</label>
              </div>
              <div class="form-group form-material floating" data-plugin="formMaterial">
                <select class="form-control" name="status">
                  <option>&nbsp;</option>
                  <option value="1">Admin</option>
                </select>
                <label class="floating-label">Status</label>
              </div>
              <div class="form-group form-material floating" data-plugin="formMaterial">
                <input type="email" class="form-control" name="email" />
                <label class="floating-label">Email</label>
              </div>
              <div class="form-group form-material floating" data-plugin="formMaterial">
                <input type="password" class="form-control" name="password" />
                <label class="floating-label">Kata Sandi</label>
              </div>
              <input type="hidden" class="form-control" name="verify" value="wait"/>
              <button type="submit" class="btn btn-primary btn-block btn-lg mt-40">Sign up</button>
            </form>
            <p>Sudah Punya akun ? Masuk <a href="/">Disini</a></p>
          </div>
        </div>

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
            <i class="icon bd-google-plus" aria-hidden="true"></i>
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
          <script src="{{asset('clasic/global/vendor/ashoverscroll/jquery-asHoverScroll.js')}}"></script>
    
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
    <script src="{{asset('clasic/topbar/assets/js/Section/GridMenu.js')}}"></script>

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
        <script src="{{asset('clasic/topbar/assets/js/Plugin/material.js')}}"></script>
    
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
