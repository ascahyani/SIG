<!DOCTYPE html>
<html lang="en">
       
<!-- Mirrored from lexa-node-vert.ourdemo.website/pages-blank by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Feb 2019 07:51:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>SIG TB Kota Bandarlampung</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />

        
            <!-- perticular page css -->

            <!-- DataTables -->
            <link href="/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
            <link href="/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
            <!-- Responsive datatable examples -->
            <link href="/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
              
            
            
         <head>
              <meta charset="utf-8" />
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
              <title>Sistem Informasi Geografis-Penyebaran Penyakit Tuberkulosis</title>
              <meta content="Admin Dashboard" name="description" />
              <meta content="Themesbrand" name="author" />
              <link rel="shortcut icon" href="/assets/assets/images/dinkes.jpg">
              <link rel="stylesheet" href="/assets/plugins/morris/morris.css">
      
              <link href="/assets/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
              <link href="/assets/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
              <link href="/assets/assets/css/icons.css" rel="stylesheet" type="text/css">
              <link href="/assets/assets/css/style.css" rel="stylesheet" type="text/css">

              <link rel="stylesheet" href="/assets/dist/css/select2.css"/>
              <link rel="stylesheet" href="/assets/dist/css/select2.min.css"/>
         
        
    </head>
    <body>
      <div id="wrapper">
          <!-- Top Bar Start -->
            <div class="topbar">
                
                <!-- LOGO -->
                <div class="topbar-left">
                <a class="logo">
                        <span>
                            <img src="/assets/assets/images/dinkes.jpg" alt="" class="rounded-circle" height="68">
                        </span>
                        <i>
                            <img src="/assets/assets/images/dinkes.jpg" alt="" class="rounded-circle" height="72">
                        </i>
                    </a>
                </div>

                <nav class="navbar-custom">
                    <ul class="navbar-right d-flex list-inline float-right mb-0">
                        
                        <li class="dropdown notification-list">
                            <div class="dropdown notification-list nav-pro-img">
                                <a class="nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="/assets/assets/images/dinkes.jpg" alt="user" class="rounded-circle"><span class="add">Pengunjung
                                    </span>
                                </a>
                                                                                                  
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->

              <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li>
                                <a href="/" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i><span class="badge badge-primary badge-pill float-right"></span> <span> Dashboard </span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-maps"></i><span> Lihat Peta <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="/peta_pasien"> Peta Penyebaran TB</a></li>
                                    <li><a href="/peta_faskes"> Peta Penyebaran Faskes</a></li>
                                    <li><a href="/peta_rawan"> Peta Daerah Rawan TB</a></li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

 
           
 

    @yield('content')
    @yield('judul')
        
 <footer class="footer">
                        © 2019 Asti Cahyani-Ilmu Komputer Universitas Lampung  <span class="d-none d-sm-inline-block"></span>
                </footer>

    
      </div>

     <script src="/assets/assets/js/jquery.min.js"></script>

<script src="/assets/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/assets/js/metisMenu.min.js"></script>
<script src="/assets/assets/js/jquery.slimscroll.js"></script>
<script src="/assets/assets/js/waves.min.js"></script>
<script src="/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>


     <!-- Required datatable js -->
        <script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Buttons examples -->
        <script src="/assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="/assets/plugins/datatables/jszip.min.js"></script>
        <script src="/assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="/assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="/assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="/assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="/assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="/assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="/assets/assets/pages/datatables.init.js"></script>

        <!-- select2 init js -->
        <script src="/assets/dist/js/select2.full.min.js" type="text/javascript"></script>
        <script src="/assets/dist/js/select2.full.js" type="text/javascript"></script>  
        <script src="/assets/dist/js/select2.js" type="text/javascript"></script>  
        <script src="/assets/dist/js/select2.min.js" type="text/javascript"></script>
        
      <!-- App js -->
     <script src="/assets/assets/js/app.js"></script>

     <script type="text/javascript">
        $(document).ready(function() {
             $("#select2").select2();
              });
    
    </script>

<script type="text/javascript">
    window.onload = function() {

        var mapOptions = {
            center: new google.maps.LatLng(-5.3971396, 105.2667887),
            zoom: 8,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var infoWindow = new google.maps.InfoWindow();
        var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);

        var marker = new google.maps.Marker({
            position: {
                lat: -5.3971396,
                lng: 105.2667887
            },
            map: map,
            draggable: true
        });
        var searchBox = new google.maps.places.SearchBox(document.getElementById('mapsearch'));

        google.maps.event.addDomListener(searchBox, 'places_changed', function() {
            var places = searchBox.getPlaces();
            var bounds = new google.maps.LatLngBounds();
            var i, place;

            for (i = 0; place = places[i]; i++) {
                bounds.extend(place.geometry.location);
                marker.setPosition(place.geometry.location);
            }
            map.fitBounds(bounds);
            map.setZoom(15);
        })


        google.maps.event.addListener(marker, 'drag', function(event) {

            document.getElementById('lat').value = event.latLng.lat();
            document.getElementById('long').value = event.latLng.lng();
        });

        google.maps.event.addListener(marker, 'click', function(event) {

            document.getElementById('lat').value = event.latLng.lat();
            document.getElementById('long').value = event.latLng.lng();
        });
    }
</script>
@stack('script');

    </body>

<!-- Mirrored from lexa-node-vert.ourdemo.website/pages-blank by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Feb 2019 07:51:42 GMT -->
</html>
