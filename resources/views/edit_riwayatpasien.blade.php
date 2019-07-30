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
                                        <li class="breadcrumb-item active">Halaman Kelola Data Riwayat Pasien</li>
                                        
                                    </ol>
                       </div>
                   </div>
               </div>
               <!-- end row -->

               <div class="row">
                            <div class="col-12">
                                <div class="card m-b-20">
                                    <div class="card-body">
      
                                        <h4 class="mt-0 header-title">Form Edit Data Riwayat Pasien </h4>
                                        @foreach ($riwayat_pasien as $riwayat)
                                            <form method="post" action="/riwayat_pasien/update" class="form-horizontal">
                                            {{csrf_field()}}  <!-- untuk generate token-->

                                            <input type="hidden" name="id" name="id" value="{{$riwayat->id}}">
                                            

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama Pasien</label>
                                            <div class="col-sm-10">
                                                <select class="custom-select" name="nama_pasien" id="select2">
                                                    <option selected>-Nama Pasien-</option>
                                                    @foreach($data_pasien as $pas)
                                                        <option  value="{{$pas->id}}">{{$pas->nama_pasien}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Tahun</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" id="example-text-input" name="tahun" value="{{$riwayat->tahun}}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Bulan</label>
                                            <div class="col-sm-10">
                                                <select class="custom-select" name="bulan" value="{{$riwayat->bulan}}">
                                                    <option selected>-Pilih Bulan-</option>
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
                                            <label class="col-sm-2 col-form-label">Status Pengobatan</label>
                                            <div class="col-sm-10">
                                                <select class="custom-select" name="status" value="{{$riwayat->status}}">
                                                    <option selected>Pilih Status</option>
                                                    <option value="Pengobatan">Pengobatan</option>
                                                    <option value="Sembuh">Sembuh</option>
                                                    <option value="Meninggal">Meninggal</option>
                                                    
                                                </select>
                                            </div>
                                        </div>

                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-primary btn-rounded btn-md">Simpan</button>
                                        </div>

                                        </form>
                                    @endforeach
                                        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
       
           </div> <!-- container-fluid -->
       
       </div> <!-- content -->
       
    </div>

@endsection