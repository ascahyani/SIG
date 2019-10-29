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
                                <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="/assets/assets/images/dinkes.jpg" alt="user" class="rounded-circle"><span class="add">Admin&nbsp;
                                    <i class="fa fa-angle-down"></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                
                                    <!-- item-->
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5"></i> Ubah Password</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power text-danger"></i> Logout</a>
                                </div>                                                                    
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
                                <a href="index.html" class="waves-effect">
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
                            
                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted-type"></i><span> Kelola Data <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="/data_pasien_tb">Data Pasien TB</a></li>
                                    <li><a href="/data_riwayat_pasien">Data Riwayat Pasien</a></li>
                                    <li><a href="/data_faskes">Data Fasilitas Kesehatan</a></li>
                                    <li><a href="/data_kepadatan">Data Kepadatan Penduduk</a></li>
                                    <li><a href="/data_jenistb">Data Jenis TB</a></li>
                                    <li><a href="/data_kecamatan">Data Kecamatan</a></li>
                                    <li><a href="/data_indeks_rtphbs">Data Indeks RTPHBS</a></li>
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

 
    

    <div class="content-page">
        
			
        <!-- Start content -->
        <div class="content">
           <div class="container-fluid">
       
               <div class="row">
                   <div class="col-sm-12">
                       <div class="page-title-box">
                           <h4 class="page-title">Sistem Informasi Geografis Penyebaran Penyakit Tuberkulosis di Kota Bandar Lampung</h4>
                           <ol class="breadcrumb">
                               <li class="breadcrumb-item active mdi mdi-chevron-right ">Halaman Admin</li>
                           </ol>
                       </div>
                   </div>
               </div>
               <!-- end row -->
               <div class="row">
                            <div class="col-12">
                                <div class="card m-b-20">
                                    <div class="card-body">

                                        <div class="row clearfix">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="card">
                                                    <div class="header">
                                                        <h2>
                                                            <center>Peta Penyebaran Pasien Penyakit Tuberkulosis di Kota Bandar Lampung</center>
                                                           
                                                        </h2>
                                                    </div>
                                                    <hr />
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="mt-0 header-title">Pilih Bulan dan Tahun</h4>
                                        
                                        <div class="form-group">
                                            <div id="map" style="width: 100%; height: 400px;"></div>
                                        </div> 

                                      
                                    </div>
                                </div>
                            </div> <!-- end col -->
       
           </div> <!-- container-fluid -->
       
       </div> <!-- content -->
       
    </div>

    <footer class="footer">
                        © 2019 Asti Cahyani-Ilmu Komputer Universitas Lampung  <span class="d-none d-sm-inline-block"></span>
                </footer>

    
      </div>
<script src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyDP3Pgxfyxnzmop6amI-Un99r3MYjapD_4&libraries=places"></script>

<script>

    var map;
    function initMap(dataLaporan) {
        map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: {lat: -5.39714, lng: 105.266789}

        });

    //     map.data.setStyle(function(feature) {
    // // console.log(feature.getProperty('id'));  
    // // console.log(dataLaporan.laporan_kecamatan[feature.getProperty('id')]); 
    
    // var opacity = 0.8;            
    // if(dataLaporan.laporan_kecamatan[feature.getProperty('id')] == null){
    //     // var color = dataLaporan.kelas[0].color;
    //     var color = "#ffffff";
    //     } else{
    //     var color = dataLaporan.laporan_kecamatan[feature.getProperty('id')].kelas.color;
    //     }
    // var color = 'rgba(255,0,0,0.9)';
    // return /** @type {google.maps.Data.StyleOptions} */({
    //     fillColor: color,
    //     fillOpacity: opacity,
    //     strokeColor: color,
    //     strokeOpacity: opacity,
    //     strokeWeight: 3
    // });
    // });

    // // When the user clicks, set 'isColorful', changing the color of the letters.
    // map.data.addListener('click', function(event) {
    // // event.feature.setProperty('isColorful', true);
    // console.log(dataLaporan.laporan_kecamatan[event.feature.f.id]);
    // console.log(event.feature);

    // });

    // map.data.addListener('mouseover', function(event) {
    // var data = dataLaporan.laporan_kecamatan[event.feature.f.id];
    // if(data == null){
    //     $("#box-keterangan-kecamatan").text("Kecamatan "+event.feature.f.nama_kec+" | Jumlah = 0 Penderita");            
    // }else{
    //     $("#box-keterangan-kecamatan").text("Kecamatan "+event.feature.f.nama_kec+" | Jumlah = "+data.jumlah+" Penderita");            
    // }
    // });

    map.data.addListener('mouseout', function(event) {
    // map.data.revertStyle();
    });

    map.data.loadGeoJson('http://localhost/SIGTB/public/assets/peta.geojson');

    }

    // var tahun = $('#tahun').val();
    // var bulan = $('#bulan').val();
    // var postUrl = "{{ route('hasil.matriks') }}";
    // var postData = 'tahun='+tahun+'&bulan='+bulan;


    // $.ajax({
    // type: "POST",
    // url: postUrl,
    // data: postData,
    // success: function(response){
    // var jsonReponse = jQuery.parseJSON(response)  
    // console.log(jsonReponse.kelas);
    // var arrayLength = jsonReponse.kelas.length;
    // for (var i = 0; i < arrayLength; i++) {
    // $("#box-keterangan").append("<div class='col-md-2' style='background-color:"+jsonReponse.kelas[i].color+"' >"+jsonReponse.kelas[i].min+" - "+jsonReponse.kelas[i].max+"</div>");
    // console.log(jsonReponse.kelas[i]);
    //             //Do something
    //         }
    //         initMap(jsonReponse);
    //         }
    //     });

    // $("#btn-pilih").click(function(){
    // var tahun = $('#tahun').val();
    // var bulan = $('#bulan').val();
    // var postUrl = "{{ route('api') }}";
    // var postData = '&tahun='+tahun+'&bulan='+bulan;

    // $.ajax({
    // type: "POST",
    // url: postUrl,
    // data: postData,
    // success: function(response){
    // var jsonReponse = jQuery.parseJSON(response); 
    // var arrayLength = jsonReponse.kelas.length;
    // $("#box-keterangan").html('');
    // for (var i = 0; i < arrayLength; i++) {
    //     $("#box-keterangan").append("<div class='col-md-2' style='background-color:"+jsonReponse.kelas[i].color+"' >"+jsonReponse.kelas[i].min+" - "+jsonReponse.kelas[i].max+"</div>");
    //     console.log(jsonReponse.kelas[i]);
    //                 //Do something
    //             }  
    //             console.log(jsonReponse.laporan_kecamatan);
    //             initMap(jsonReponse);
    //             }
    //         });
    // });

</script>

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
@push('script')


    <script>
        $(document).ready(function(){
            var tanggal = new Date().getFullYear();
            min = tanggal - 4;
            max = tanggal + 4;
            select = document.getElementById('tahun');

            for (var i=min; i<=max; i++){
                var opt = document.createElement('option');
                opt.value = i;
                opt.innerHTML = i;
                select.appendChild(opt);
            } 
        })
    </script>

@endpush
</body>

<!-- Mirrored from lexa-node-vert.ourdemo.website/pages-blank by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Feb 2019 07:51:42 GMT -->
</html>
