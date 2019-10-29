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
                               <li class="breadcrumb-item active mdi mdi-chevron-right ">Halaman Peta Daerah Rawan Tuberkulosis</li>
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
                                                            <center>Peta Daerah Rawan Penyakit Tuberkulosis di Kota Bandar Lampung</center>
                                                           
                                                        </h2>
                                                    </div>
                                                    <hr />
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="mt-0 header-title">Pilih Bulan dan Tahun</h4>
                                        <form method="post" action="{{ route('hasil.matriks') }}" class="form-horizontal">

                                            {{csrf_field()}}  <!-- untuk generate token-->

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Bulan</label>
                                            <div class="col-sm-10">
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
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tahun</label>
                                            <div class="col-sm-10">
                                                <select class="custom-select" name="tahun" id="tahun">
                                                   
                                                </select>
                                            </div>
                                        </div>
                                            
                                            <div class="pull-right">
                                                <button type="submit" class="btn btn-primary btn-rounded btn-md mb-4 float-right">Cari</button>
                                            </div>

                                            <div class="form-group">
                                                <div id="map" style="width: 100%; height: 500px;"></div>
                                            </div>

                                        </form>

                                      
                                    </div>
                                </div>
                            </div> <!-- end col -->
                    </div> <!-- end row -->
    
           </div> <!-- container-fluid -->
       
       </div> <!-- content -->
       
    </div>

@endsection
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

  
    <script>

        // var map;
        // function initMap(dataLaporan) {
        //     map = new google.maps.Map(document.getElementById('map'), {
        //     zoom: 12,
        //     center: {lat: -5.39714, lng: 105.266789}

        //     });

            //map.data.setStyle(function(feature) {
        // //u console.log(feature.f.id);  
        // //u console.log(dataLaporan.laporan_kecamatan[feature.f.id]); 

        //     var opacity = 0.8;            
        //     if(dataLaporan.laporan_kecamatan[feature.f.id] == null){
        // // //u var color = dataLaporan.kelas[0].color;
        //     var color = "#ffffff";
        //     } else{
        //     var color = dataLaporan.laporan_kecamatan[feature.f.id].kelas.color;
        //     }
        //     //u var color = 'rgba(255,0,0,0.9)';
        //     return /** @type {google.maps.Data.StyleOptions} */({
        //     fillColor: color,
        //     fillOpacity: opacity,
        //     strokeColor: color,
        //     strokeOpacity: opacity,
        //     strokeWeight: 3
        //     });
        //     });

        // //u When the user clicks, set 'isColorful', changing the color of the letters.
        // map.data.addListener('click', function(event) {
        // //u event.feature.setProperty('isColorful', true);
        // console.log(dataLaporan.laporan_kecamatan[event.feature.f.id]);
        // console.log(event.feature);

        // });

        // map.data.addListener('mouseover', function(event) {
        // var data = dataLaporan.laporan_kecamatan[event.feature.f.id];
        // if(data == null){
        // $("#box-keterangan-kecamatan").text("Kecamatan "+event.feature.f.nama_kec+" | Jumlah = 0 Penderita");            
        // }else{
        // $("#box-keterangan-kecamatan").text("Kecamatan "+event.feature.f.nama_kec+" | Jumlah = "+data.jumlah+" Penderita");            
        // }
        // });

        // map.data.addListener('mouseout', function(event) {
        // //u map.data.revertStyle();
        // });

        // map.data.loadGeoJson(
        // 'http://localhost/SIGTB/public/assets/kecamatan/peta.geojson');

        // }

        // var id_penyakit = $('#id_penyakit').val();
        // var tahun = $('#tahun').val();
        // var bulan = $('#bulan').val();
        // var postUrl = '?php echo base_url('index.php/Api/get_map_data'); ?>';
        // var postData = 'id_penyakit='+id_penyakit+'&tahun='+tahun+'&bulan='+bulan;



        // $.ajax({
        // type: "POST",
        // url: postUrl,
        // data: postData,
        // success: function(response){
        // var jsonReponse = jQuery.parseJSON(response);   
        // console.log(jsonReponse.kelas);
        // var arrayLength = jsonReponse.kelas.length;
        // for (var i = 0; i < arrayLength; i++) {
        // $("#box-keterangan").append("<div class='col-md-2' style='background-color:"+jsonReponse.kelas[i].color+"' >"+jsonReponse.kelas[i].min+" - "+jsonReponse.kelas[i].max+"</div>");
        // console.log(jsonReponse.kelas[i]);
        // //u Do something
        // }
        // initMap(jsonReponse);
        // }
        // });

        // $("#btn-pilih").click(function(){
        // var id_penyakit = $('#id_penyakit').val();
        // var tahun = $('#tahun').val();
        // var bulan = $('#bulan').val();
        // var postUrl = '?php echo base_url('index.php/Api/get_map_data'); ?>';
        // var postData = 'id_penyakit='+id_penyakit+'&tahun='+tahun+'&bulan='+bulan;

        // $.ajax({
        // type: "POST",
        // url: postUrl,
        // data: postData,
        // success: function(response){
        // var jsonReponse = jQuery.parseJSON(response); 
        // var arrayLength = jsonReponse.kelas.length;
        // $("#box-keterangan").html('');
        // for (var i = 0; i < arrayLength; i++) {
        // $("#box-keterangan").append("<div class='col-md-2' style='background-color:"+jsonReponse.kelas[i].color+"' >"+jsonReponse.kelas[i].min+" - "+jsonReponse.kelas[i].max+"</div>");
        // console.log(jsonReponse.kelas[i]);
        //     //u Do something
        //     }  
        //     console.log(jsonReponse.laporan_kecamatan);
        //     initMap(jsonReponse);
        // }
        // });
        // });

    </script>
    

    

@endpush
