@extends('master_admin')
@section('content')

@section ('judul')

    <div class="content-page">
        
			
        <!-- Start content -->
        <div class="content">
           <div class="container-fluid">
       
               <div class="row">
                   <div class="col-sm-12">
                       <div class="page-title-box">
                           <h4 class="page-title">Sistem Informasi Geografis Penyebaran Penyakit Tuberkulosis di Kota Bandar Lampung</h4>
                           <ol class="breadcrumb">
                               <li class="breadcrumb-item active mdi mdi-chevron-right ">Halaman Peta Pesebaran Pasien Tuberkulosis</li>
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
                                        <div class="form-group row">
                                        <label for="form-control">Tahun </label>
                                            <div class="col-sm-10">
                                            <select name="tahun" id="tahun">
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                            </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="form-control">Bulan </label>
                                            <div class="col-sm-10">
                                            <select name="bulan" id="bulan">
                                                <option value="Januari">Januari</option>
                                                <option value="Februari">Februari</option>
                                                <option value="Maret">Maret</option>
                                                <option value="04">April</option>
                                                <option value="05">Mei</option>
                                                <option value="06">Juni</option>
                                                <option value="07">Juli</option>
                                                <option value="08">Agustus</option>
                                                <option value="09">Septemer</option>
                                                <option value="10">Oktober</option>
                                                <option value="11">November</option>
                                                <option value="12">Desember</option>
                                            </select>
                                            </div>
                                        </div>
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

                                    </div>
                                </div>
                            </div> <!-- end col -->
                    </div> <!-- end row -->
    
           </div> <!-- container-fluid -->
       
       </div> <!-- content -->
       
    </div>

@endsection
@push('script')

<script src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyBt6a6dy99jZcyrlIe7OghOsZ0khO1x4O8&callback=initMap"></script>

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
          console.log(dataLaporan.laporan_kecamatan[event.feature.getProperty('id')]);
          console.log(event.feature);
        });
        map.data.addListener('mouseover', function(event) {
          var data = dataLaporan.laporan_kecamatan[event.feature.getProperty('id')];
          if(data == null){
            $("#box-keterangan-kecamatan").text("Kecamatan "+event.feature.getProperty('nama_kec')+" | Jumlah = 0 Penderita");            
          }else{
            $("#box-keterangan-kecamatan").text("Kecamatan "+event.feature.getProperty('nama_kec')+" | Nilai SAW = "+data.jumlah);            
          }
        });
        map.data.addListener('mouseout', function(event) {
          // map.data.revertStyle();
        });
        map.data.loadGeoJson("{{ route('json') }}");
      }
      var id_penyakit = $('#id_penyakit').val();
      var tahun = $('#tahun').val();
      var bulan = $('#bulan').val();
      var postUrl = "{{ route('api') }}";
      var postData = 'tahun='+tahun+'&bulan='+bulan;
      
      $.ajax({
       type: "GET",
       url: postUrl,
       data: postData,
       success: function(response){
         var jsonReponse = jQuery.parseJSON(response);   
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
      $("#btn-pilih").click(function(){
        var id_penyakit = $('#id_penyakit').val();
        var tahun = $('#tahun').val();
        var bulan = $('#bulan').val();
        var postUrl = "{{ route('api') }}";
        var postData = 'tahun='+tahun+'&bulan='+bulan;
        $.ajax({
         type: "GET",
         url: postUrl,
         data: postData,
         success: function(response){
           var jsonReponse = jQuery.parseJSON(response); 
           var arrayLength = jsonReponse.kelas.length;
           $("#box-keterangan").html('');
           for (var i = 0; i < arrayLength; i++) {
            $("#box-keterangan").append("<div class='col-md-2' style='background-color:"+jsonReponse.kelas[i].color+"' >"+jsonReponse.kelas[i].min+" - "+jsonReponse.kelas[i].max+"</div>");
            console.log(jsonReponse.kelas[i]);
                        //Do something
                      }  
                      console.log(jsonReponse.laporan_kecamatan);
                      initMap(jsonReponse);
                    }
                  });
      });
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


@endpush
