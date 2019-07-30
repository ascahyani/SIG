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
                                        <li class="breadcrumb-item active">Halaman Kelola Data Pasien TB</li>
                                        
                                    </ol>
                       </div>
                   </div>
               </div>
               <!-- end row -->

               <div class="row">
                            <div class="col-12">
                                <div class="card m-b-20">
                                    <div class="card-body">
      
                                        <h4 class="mt-0 header-title">Form Input Data Pasien TB</h4>
                                        
                                        <form method="post" action="/data_pasien_tb/store" class="form-horizontal">
                                        {{csrf_field()}}  <!-- untuk generate token-->

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Kecamatan</label>
                                            <div class="col-sm-10">
                                                <select class="custom-select" name="id_kecamatan">
                                                    <option selected>-Kecamatan-</option>
                                                    @foreach($kecamatan as $kec)
                                                        <option  value="{{$kec->id}}">{{$kec->nama_kecamatan}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Jenis TB</label>
                                            <div class="col-sm-10">
                                                <select class="custom-select" name="id_jenis_tb">
                                                    <option selected>-Jenis TB-</option>
                                                    @foreach($jenis_tb as $tb)
                                                        <option  value="{{$tb->id}}">{{$tb->nama}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Faskes</label>
                                            <div class="col-sm-10">
                                                <select class="custom-select" name="id_faskes">
                                                    <option selected>-Faskes-</option>
                                                    @foreach($faskes as $fas)
                                                        <option  value="{{$fas->id}}">{{$fas->nama_faskes}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="nama" id="example-text-input">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-date-input" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="date" value="2011-08-19" name="tanggal_lahir" id="example-date-input">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="alamat" id="mapsearch">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="card">
                                                            <div class="header">
                                                                <h2>
                                                                    <center>Pilih Alamat Pasien</center>
                                                                    <small><center><span class="text-danger">*klik marker sesuai lokasi Faskes</span></small>
                                                                </h2>
                                                            </div>
                                                    </div>
                                            </div>
                                        </div>

					                    <div class="form-group">
                                            <div id="dvMap" style="width: 100%; height: 400px;"></div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Latitude</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="latitude" id="lat">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Longitude</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="longitude" id="long">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-date-input" class="col-sm-2 col-form-label">Tanggal Mulai Pengobatan</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="date" value="2011-08-19" name="tanggal" id="example-date-input">
                                            </div>
                                        </div>

                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-primary btn-rounded btn-md">Simpan</button>
                                        </div>

                                        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
       
           </div> <!-- container-fluid -->
       
       </div> <!-- content -->
       
    </div>

@endsection