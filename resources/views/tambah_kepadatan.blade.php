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
                                        <li class="breadcrumb-item active">Halaman Kelola Data Kepadatan</li>
                                        
                                    </ol>
                       </div>
                   </div>
               </div>
               <!-- end row -->

               <div class="row">
                            <div class="col-12">
                                <div class="card m-b-20">
                                    <div class="card-body">
      
                                        <h4 class="mt-0 header-title">Form Input Data Kepadatan</h4>
                                        
                                        <form method="post" action="/data_kepadatan/store" class="form-horizontal">
                                        {{csrf_field()}}

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Kecamatan</label>
                                            <div class="col-sm-10">
                                                <select class="custom-select" name="kecamatan">
                                                    <option selected>-Kecamatan-</option>
                                                    @foreach($kecamatan as $kec)
                                                        <option  value="{{$kec->id}}">{{$kec->nama_kecamatan}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Luas Wilayah (km2)</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" id="luas_daerah" name="luas_daerah">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Jumlah Penduduk</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" id="jumlah_penduduk" name="jumlah_penduduk" >
                                            </div>
                                        </div>
                                       
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Kepadatan Penduduk</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" id="kepadatan_penduduk" name="kepadatan_penduduk" >
                                            </div>
                                        </div>        
                                           

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Tahun</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" id="example-text-input" name="tahun">
                                            </div>
                                        </div>
                                        
                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-primary btn-rounded btn-md" value="simpan">Simpan</button>
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
        $(function(){
            $('#luas_daerah, #jumlah_penduduk').keyup(function(){
               var luas_daerah = parseFloat($('#luas_daerah').val()) || 0;
               var jumlah_penduduk = parseFloat($('#jumlah_penduduk').val()) || 0;
               var hasil = jumlah_penduduk / luas_daerah;
               var round = Math.round(hasil);
               $('#kepadatan_penduduk').val(round);
            });
         });
    </script>
@endpush