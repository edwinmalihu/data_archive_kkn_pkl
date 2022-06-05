
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    
    <title>Dashboard | Arsip Laporan PKL dan KKN</title>
    
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
        <link rel="stylesheet" href="{{asset('clasic/global/vendor/chartist/chartist.css')}}">
        <link rel="stylesheet" href="{{asset('clasic/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css')}}">
        <link rel="stylesheet" href="{{asset('clasic/global/vendor/aspieprogress/asPieProgress.css')}}">
        <link rel="stylesheet" href="{{asset('clasic/global/vendor/jquery-selective/jquery-selective.css')}}">
        <link rel="stylesheet" href="{{asset('clasic/global/vendor/bootstrap-datepicker/bootstrap-datepicker.css')}}">
        <link rel="stylesheet" href="{{asset('clasic/global/vendor/asscrollable/asScrollable.css')}}">
        <link rel="stylesheet" href="{{asset('clasic/topbar/assets/examples/css/dashboard/team.css')}}">
              
        <!-- DATATABLE PLUGINS -->
        <!-- <link rel="stylesheet" href="{{asset('clasic/global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css')}}">
        <link rel="stylesheet" href="{{asset('clasic/global/vendor/datatables.net-bs4/dataTables.bootstrap4.css')}}">
        <link rel="stylesheet" href="{{asset('clasic/global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css')}}">
        <link rel="stylesheet" href="{{asset('clasic/global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css')}}">
        <link rel="stylesheet" href="{{asset('clasic/global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css')}}">
        <link rel="stylesheet" href="{{asset('clasic/global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css')}}">
        <link rel="stylesheet" href="{{asset('clasic/global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css')}}">
        <link rel="stylesheet" href="{{asset('clasic/global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css')}}">
        <link rel="stylesheet" href="{{asset('clasic/topbar/examples/css/tables/datatable.css')}}"> -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>  

    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('clasic/global/fonts/web-icons/web-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('clasic/global/fonts/brand-icons/brand-icons.min.css')}}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    
    <!-- Scripts -->
    <script src="{{asset('clasic/global/vendor/breakpoints/breakpoints.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script>
      Breakpoints();
    </script>

<style>
   /* .kkn {
      display: none;
   }

   .pkl {
      display: block;
   } */
   .filter{
     display : flex;
     
   }
   .filter form{
     margin-left : 20px;
   }

   /* .export-fitur{
     display : flex;
   } */

   .export-fitur .pdf{
     height : 40px;
     margin-left : 40px;
   }

   .export-fitur .print{
     height : 40px;
     margin-left : 10px;
   }

</style>
  </head>
  <body class="animsition site-navbar-small dashboard">
    <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-inverse"
      role="navigation">
    
      <div class="navbar-header">
        <a class="navbar-brand navbar-brand-center" href="/dashboard">
          <img class="navbar-brand-logo navbar-brand-logo-normal" src="{{asset('clasic/topbar/assets/images/LOGO-UNMUS-1.png')}}"
            title="Universitas Musamus">
          <img class="navbar-brand-logo navbar-brand-logo-special" src="{{asset('clasic/topbar/assets/images/LOGO-UNMUS-1.png')}}"
            title="Universitas Musamus">
          <span class="navbar-brand-text hidden-xs-down"> INFORMATIKA UNMUS</span>
        </a>
      </div>
    
      <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
          <!-- Navbar Toolbar -->
          <ul class="nav navbar-toolbar">
            <li class="nav-item hidden-float" id="toggleMenubar">
              <a class="nav-link" data-toggle="menubar" href="#" role="button">
                <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
              </a>
            </li>

          </ul>
          <!-- End Navbar Toolbar -->
    
          <!-- Navbar Toolbar Right -->

          <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
            @auth
            <li class="nav-item dropdown">
              <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
                data-animation="scale-up" role="button">
                <span>Selamat Datang, {{ auth()->user()->name }}</span>
                <span class="avatar avatar-online">
                  <img src="{{asset('clasic/global/portraits/5.jpg')}}" alt="...">
                  <i></i>
                </span>
              </a>
              <div class="dropdown-menu" role="menu">
                <div class="dropdown-divider" role="presentation"></div>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</button>
                </form>
              </div>
            </li>
            @endauth   
          </ul>

          <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->
    
        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
          <form role="search">
            <div class="form-group">
              <div class="input-search">
                <i class="input-search-icon wb-search" aria-hidden="true"></i>
                <input type="text" class="form-control" name="site-search" placeholder="Search...">
                <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
                  data-toggle="collapse" aria-label="Close"></button>
              </div>
            </div>
          </form>
        </div>
        <!-- End Site Navbar Seach -->
      </div>
    </nav>    <div class="site-menubar site-menubar-light">
      <div class="site-menubar-body">
        <div>
          <div>
            @can('mhs')
            <ul class="site-menu" data-plugin="menu">
              <li class="site-menu-category">General</li>
              <li class="dropdown site-menu-item has-sub">
                <a data-toggle="dropdown" href="/dashboard" data-dropdown-toggle="false">
                        <i class="site-menu-icon wb-add-file" aria-hidden="true"></i>
                        <span class="site-menu-title">Home</span>
                            <!-- <span class="site-menu-arrow"></span> -->
                    </a>
              </li>
              <li class="dropdown site-menu-item has-sub">
                <a data-toggle="dropdown" href="/dashboard/pkl" data-dropdown-toggle="false">
                        <i class="site-menu-icon wb-add-file" aria-hidden="true"></i>
                        <span class="site-menu-title">Praktek Kerja Lapangan</span>
                            <!-- <span class="site-menu-arrow"></span> -->
                    </a>
              </li>
              <li class="dropdown site-menu-item has-sub">
                <a data-toggle="dropdown" href="/dashboard/kkn" data-dropdown-toggle="false">
                        <i class="site-menu-icon wb-add-file" aria-hidden="true"></i>
                        <span class="site-menu-title">Kuliah Kerja Nyata</span>
                            <!-- <span class="site-menu-arrow"></span> -->
                    </a>
              </li>                     
            </ul>   
            @endcan   
          </div>
          <div>
            @can('admin')
            <ul class="site-menu" data-plugin="menu">
              <li class="site-menu-category">General</li>
              <li class="dropdown site-menu-item has-sub">
                <a data-toggle="dropdown" href="/dashboard" data-dropdown-toggle="false">
                        <i class="site-menu-icon wb-add-file" aria-hidden="true"></i>
                        <span class="site-menu-title">Home</span>
                            <!-- <span class="site-menu-arrow"></span> -->
                    </a>
              </li>
              <li class="dropdown site-menu-item has-sub">
                <a data-toggle="dropdown" href="/dashboard/tambah-dosen" data-dropdown-toggle="false">
                        <i class="site-menu-icon wb-user-add" aria-hidden="true"></i>
                        <span class="site-menu-title">Tambah Dosen</span>
                            <!-- <span class="site-menu-arrow"></span> -->
                    </a>
              </li>
              <li class="dropdown site-menu-item has-sub">
                <a data-toggle="dropdown" href="/dashboard/lihat-dosen" data-dropdown-toggle="false">
                        <i class="site-menu-icon wb-user-add" aria-hidden="true"></i>
                        <span class="site-menu-title">List Dosen</span>
                            <!-- <span class="site-menu-arrow"></span> -->
                    </a>
              </li>
              <li class="dropdown site-menu-item has-sub">
                <a data-toggle="dropdown" href="/dashboard/daftar-user" data-dropdown-toggle="false">
                        <i class="site-menu-icon wb-users" aria-hidden="true"></i>
                        <span class="site-menu-title">Lihat User</span>
                            <!-- <span class="site-menu-arrow"></span> -->
                    </a>
              </li>                     
            </ul>   
            @endcan   
          </div>
        </div>
      </div>
    </div>

    <!-- Page -->
    <div class="page">
      <div class="page-content container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">
          <!-- First Row -->

          <!-- Breadcrumbs -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            </ol>
          </nav>
          <!-- End Breadcrumbs -->

          <!-- Completed Options  -->
          <div class="col-xxl-3">
            <div class="row h-full" data-plugin="matchHeight">
              <div class="col-xxl-12 col-lg-12 col-sm-12">
                <div class="card card-shadow card-completed-options">
                  <div class="card-block p-30">
                    <div class="row">
                      <div class="col-12">
                        <div class="counter text-left blue-grey-700" style="float:right">
                         @yield('filter')
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- <div class="col-md-6"> -->
            <!-- Card -->
            <!-- <div class="card card-block p-30 bg-blue-600">
              <div class="card-watermark darker font-size-80 m-15"><i class="icon wb-file" aria-hidden="true"></i></div>
              <div class="counter counter-md counter-inverse text-left">
                <div class="counter-number-group">
                  <span class="counter-number">{{$count_pkl}}</span>
                  <span class="counter-number-related text-capitalize">Laporan</span>
                </div>
                <div class="counter-label text-capitalize">Praktek Kerja Lapangan</div>
              </div>
            </div> -->
            <!-- End Card -->
          <!-- </div> -->

        
          <!-- <div class="col-md-6"> -->
            <!-- Card -->
            <!-- <div class="card card-block p-30 bg-red-600">
              <div class="card-watermark darker font-size-80 m-15"><i class="icon wb-file" aria-hidden="true"></i></div>
              <div class="counter counter-md counter-inverse text-left">
                <div class="counter-number-group">
                  <span class="counter-number">{{$count_kkn}}</span>
                  <span class="counter-number-related text-capitalize">Laporan</span>
                </div>
                <div class="counter-label text-capitalize">Kuliah Kerja Nyata</div>
              </div>
            </div> -->
            <!-- End Card -->
          <!-- </div> -->

        </div>
        <!-- start conten -->
        <div class="pkl-conten">
        @if(session()->has('status'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('status')}}
          </div>
        @endif
          @yield('container')
        </div>
        <div class="kkn-conten">
          @yield('kkn')
        </div>

        
        
        <!-- end isi conten -->
      </div>
    </div>
    <!-- End Page -->


    <!-- Footer -->
    <footer class="site-footer">
      <div class="site-footer-legal">© 2022 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">UNIVERSITAS MUSAMUS</a></div>
      <div class="site-footer-right">
        Crafted with <i class="red-600 wb wb-heart"></i> by <a href="">Risthalia Boro</a>
      </div>
    </footer>
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
        <script src="{{asset('clasic/global/vendor/chartist/chartist.js')}}"></script>
        <!-- <script src="{{asset('clasic/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js')}}"></script> -->
        <script src="{{asset('clasic/global/vendor/aspieprogress/jquery-asPieProgress.js')}}"></script>
        <script src="{{asset('clasic/global/vendor/matchheight/jquery.matchHeight-min.js')}}"></script>
        <script src="{{asset('clasic/global/vendor/jquery-selective/jquery-selective.min.js')}}"></script>
        <script src="{{asset('clasic/global/vendor/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
    
        <!-- DATA TABLE PLUGINS -->
        <script src="{{asset('clasic/global/vendor/datatables.net/jquery.dataTables.js')}}"></script>
        <script src="{{asset('clasic/global/vendor/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
        <script src="{{asset('clasic/global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.js')}}"></script>
        <script src="{{asset('clasic/global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.js')}}"></script>
        <script src="{{asset('clasic/global/vendor/datatables.net-rowgroup/dataTables.rowGroup.js')}}"></script>
        <script src="{{asset('clasic/global/vendor/datatables.net-scroller/dataTables.scroller.js')}}"></script>
        <script src="{{asset('clasic/global/vendor/datatables.net-responsive/dataTables.responsive.js')}}"></script>
        <script src="{{asset('clasic/global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js')}}"></script>
        <script src="{{asset('clasic/global/vendor/datatables.net-buttons/dataTables.buttons.js')}}"></script>
        <script src="{{asset('clasic/global/vendor/datatables.net-buttons/buttons.html5.js')}}"></script>
        <script src="{{asset('clasic/global/vendor/datatables.net-buttons/buttons.flash.js')}}"></script>
        <script src="{{asset('clasic/global/vendor/datatables.net-buttons/buttons.print.js')}}"></script>
        <script src="{{asset('clasic/global/vendor/datatables.net-buttons/buttons.colVis.js')}}"></script>
        <script src="{{asset('clasic/global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js')}}"></script>
        <script src="{{asset('clasic/global/vendor/asrange/jquery-asRange.min.js')}}"></script>
        <script src="{{asset('clasic/global/vendor/bootbox/bootbox.js')}}"></script>

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
        <script src="{{asset('clasic/global/js/Plugin/matchheight.js')}}"></script>
        <script src="{{asset('clasic/global/js/Plugin/aspieprogress.js')}}"></script>
        <script src="{{asset('clasic/global/js/Plugin/bootstrap-datepicker.js')}}"></script>
        <script src="{{asset('clasic/global/js/Plugin/asscrollable.js')}}"></script>
    
        <script src="{{asset('clasic/topbar/assets/examples/js/dashboard/team.js')}}"></script>

        <!-- DATA TABLE -->
        // <script src="{{asset('clasic/global/js/Plugin/datatables.js')}}"></script>
        // <script src="{{asset('clasic/topbar/assets/examples/js/tables/datatable.js')}}"></script>

        <script>
        (function(document, window, $){
            'use strict';
        
            var Site = window.Site;
            $(document).ready(function(){
            Site.run();
            });
        })(document, window, jQuery);
        
        $(document).ready( function () {

          //js filter 
            $('.filter').change(function(){
            var data = $(this).val();            
            if(data == "kkn"){
              $(".kkn-conten").show();
              $(".pkl-conten").hide();					
            }else if(data == "pkl"){
              $(".pkl-conten").show();
              $(".kkn-conten").hide();
            }	

          });
          $(".kkn-conten").hide();

          //js pkl
  
          var table1 = $('#examplePkl').DataTable({
            "ordering": false,
            "order": [[ 1, "desc" ]],
            "lengthMenu": [
                        [5, 25, 50, -1],
                        [5, 25, 50, "All"]
                    ],
            "oLanguage": {
              "sInfo": "Showing _START_ to _END_ of _TOTAL_ items."
            }
          });

          $("#examplePkl thead td").each( function ( i ) {
            
            if ($(this).text() !== '') {
                  var isStatusColumn = (($(this).text() == 'Status') ? true : false);
              var select = $('<select><option value=""></option></select>')
                      .appendTo( $(this).empty() )
                      .on( 'change', function () {
                          var val = $(this).val();
                  
                          table1.column( i )
                              .search( val ? '^'+$(this).val()+'$' : val, true, false )
                              .draw();
                      } );
              
              // Get the Status values a specific way since the status is a anchor/image
              if (isStatusColumn) {
                var statusItems = [];
                
                        /* ### IS THERE A BETTER/SIMPLER WAY TO GET A UNIQUE ARRAY OF <TD> data-filter ATTRIBUTES? ### */
                table1.column( i ).nodes().to$().each( function(d, j){
                  var thisStatus = $(j).attr("data-filter");
                  if($.inArray(thisStatus, statusItems) === -1) statusItems.push(thisStatus);
                } );
                
                statusItems.sort();
                        
                $.each( statusItems, function(i, item){
                    select.append( '<option value="'+item+'">'+item+'</option>' );
                });

              }
                    // All other non-Status columns (like the example)
              else {
                table1.column( i ).data().unique().sort().each( function ( d, j ) {  
                  select.append( '<option value="'+d+'">'+d+'</option>' );
                    } );	
              }
                  
            }
          } );

          // js kkn
          var table2 = $('#examplekkn').DataTable({
            "ordering": false,
            "order": [[ 1, "desc" ]],
            "lengthMenu": [
                        [5, 25, 50, -1],
                        [5, 25, 50, "All"]
                    ],
            "oLanguage": {
              "sInfo": "Showing _START_ to _END_ of _TOTAL_ items."
            }
          });

          $("#examplekkn thead td").each( function ( i ) {
            
            if ($(this).text() !== '') {
                  var isStatusColumn = (($(this).text() == 'Status') ? true : false);
              var select = $('<select><option value=""></option></select>')
                      .appendTo( $(this).empty() )
                      .on( 'change', function () {
                          var val = $(this).val();
                  
                          table2.column( i )
                              .search( val ? '^'+$(this).val()+'$' : val, true, false )
                              .draw();
                      } );
              
              // Get the Status values a specific way since the status is a anchor/image
              if (isStatusColumn) {
                var statusItems = [];
                
                        /* ### IS THERE A BETTER/SIMPLER WAY TO GET A UNIQUE ARRAY OF <TD> data-filter ATTRIBUTES? ### */
                table2.column( i ).nodes().to$().each( function(d, j){
                  var thisStatus = $(j).attr("data-filter");
                  if($.inArray(thisStatus, statusItems) === -1) statusItems.push(thisStatus);
                } );
                
                statusItems.sort();
                        
                $.each( statusItems, function(i, item){
                    select.append( '<option value="'+item+'">'+item+'</option>' );
                });

              }
                    // All other non-Status columns (like the example)
              else {
                table2.column( i ).data().unique().sort().each( function ( d, j ) {  
                  select.append( '<option value="'+d+'">'+d+'</option>' );
                    } );	
              }
                  
            }
          } );
        } );

        </script>
        @stack('custom-scripts')
  </body>
</html>
