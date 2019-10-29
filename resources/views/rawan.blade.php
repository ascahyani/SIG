<!DOCTYPE html>
<html lang="en">
<head>
<?php  header('Access-Control-Allow-Origin:  http://localhost/SIGTB/');
        header('Content-Type: application/json');?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
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

      <!-- Page Content -->
      <div id="page-wrapper">
        <div class="container-fluid">

          <div class="row">
            <div class="col-lg-12">
              <h1 class="page-header">Peta Penyebaran Penyakit Menular di Kota Bandar Lampung</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <label for="form-control">Penyakit </label>
              
              <label for="form-control">Tahun </label>
              <select class="custom-select" name="tahun" id="tahun">
              </select>

              <label for="form-control">Bulan </label>
              <select class="custom-select" name="bulan">
                  <option selected>Pilih Bulan</option>
                  <option value="Januari">Januari</option>
                  <option value="Februari">februari</option>
                  <option value="Maret">Maret</option>
                  <option value="April">April</option>
                  <option value="Mei">Mei</option>
                  <option value="Juni">Juni</option>
                  <option value="Juli">Juli</option>
                  <option value="Agustus">Agustus</option>
                  <option value="September">September</option>
                  <option value="Oktober">Oktober</option>
                  <option value="November">November</option>
                  <option value="Desember">Desember</option>
              </select>
              <button class="btn btn-sm btn-success" id="btn-pilih" > Pilih</button>
              <br>
              <br>
              <div class="col-lg-12" id="box-keterangan">
              </div>
              <br>
              <br>
              <div class="col-lg-12" id="box-keterangan-kecamatan">
              </div>
              <br>
              <br>
              <div class="col-lg-12">
                <body style="font-family: Arial; border: 0 none;">

                  <div id = "map" style = "width:1000px; height:500px;"></div>

                  <script src="/assets/assets/js/jquery.min.js"></script>

                <script src="/assets/assets/js/bootstrap.bundle.min.js"></script>
                <script src="/assets/assets/js/metisMenu.min.js"></script>
                <script src="/assets/assets/js/jquery.slimscroll.js"></script>
                <script src="/assets/assets/js/waves.min.js"></script>
                <script src="/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
                
                  <script src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyAOpdBpwYOOlEcMywl8vXLTBjoHqYXtKDU&callback=initMap"></script>

                  <script>

                    var map;
                    function initMap(dataLaporan) {
                      map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 12,
                        center: {lat: -5.39714, lng: 105.266789}

                      });

                      map.data.setStyle(function(feature) {
                    console.log(feature.getProperty('id'));  
                    console.log(dataLaporan.laporan_kecamatan[feature.getProperty('id')]); 
                    
                    var opacity = 0.8;            
                    if(dataLaporan.laporan_kecamatan[feature.getProperty('id')] == null){
                        // var color = dataLaporan.kelas[0].color;
                        var color = "#ffffff";
                        } else{
                        var color = dataLaporan.laporan_kecamatan[feature.getProperty('id')].kelas.color;
                        }
                    // var color = 'rgba(255,0,0,0.9)';
                    return /** @type {google.maps.Data.StyleOptions} */({
                        fillColor: color,
                        fillOpacity: opacity,
                        strokeColor: color,
                        strokeOpacity: opacity,
                        strokeWeight: 3
                    });
                    });

                    // When the user clicks, set 'isColorful', changing the color of the letters.
                    map.data.addListener('click', function(event) {
                    // event.feature.setProperty('isColorful', true);
                    console.log(dataLaporan.laporan_kecamatan[event.feature.f.id]);
                    console.log(event.feature);

                    });

                    map.data.addListener('mouseover', function(event) {
                    var data = dataLaporan.laporan_kecamatan[event.feature.f.id];
                    if(data == null){
                        $("#box-keterangan-kecamatan").text("Kecamatan "+event.feature.f.nama_kec+" | Jumlah = 0 Penderita");            
                    }else{
                        $("#box-keterangan-kecamatan").text("Kecamatan "+event.feature.f.nama_kec+" | Jumlah = "+data.jumlah+" Penderita");            
                    }
                    });

                    map.data.addListener('mouseout', function(event) {
                    // map.data.revertStyle();
                    });

                    map.data.loadGeoJson('http://localhost/SIGTB/public/assets/peta.geojson');

                }

                var tahun = $('#tahun').val();
                var bulan = $('#bulan').val();
                var postUrl = "{{ route('hasil.matriks') }}";
                var postData = 'tahun='+tahun+'&bulan='+bulan;
                

                $.ajax({
                type: "POST",
                url: postUrl,
                data: postData,
                success: function(response){
                    var jsonReponse = jQuery.parseJSON(response)  
                    console.log(jsonReponse.kelas);
                    var arrayLength = jsonReponse.kelas.length;
                    for (var i = 0; i < arrayLength; i++) {
                    $("#box-keterangan").append("<div class='col-md-2' style='background-color:"+jsonReponse.kelas[i].color+"' >"+jsonReponse.kelas[i].min+" - "+jsonReponse.kelas[i].max+"</div>");
                    console.log(jsonReponse.kelas[i]);
                                //Do something
                            }
                            initMap(jsonReponse);
                            }
                        });


                // $("#btn-pilih").click(function(){
                //     var tahun = $('#tahun').val();
                //     var bulan = $('#bulan').val();
                //     var postUrl = "{{ route('api') }}";
                //     var postData = '&tahun='+tahun+'&bulan='+bulan;

                //     $.ajax({
                //     type: "POST",
                //     url: postUrl,
                //     data: postData,
                //     success: function(response){
                //     var jsonReponse = jQuery.parseJSON(response); 
                //     var arrayLength = jsonReponse.kelas.length;
                //     $("#box-keterangan").html('');
                //     for (var i = 0; i < arrayLength; i++) {
                //         $("#box-keterangan").append("<div class='col-md-2' style='background-color:"+jsonReponse.kelas[i].color+"' >"+jsonReponse.kelas[i].min+" - "+jsonReponse.kelas[i].max+"</div>");
                //         console.log(jsonReponse.kelas[i]);
                //                     //Do something
                //                 }  
                //                 console.log(jsonReponse.laporan_kecamatan);
                //                 initMap(jsonReponse);
                //                 }
                //             });
                //});

    </script>
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
</body>
</html>