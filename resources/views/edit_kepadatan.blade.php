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
      
                                        <h4 class="mt-0 header-title">Form Edit Data Kepadatan</h4>
                                        
                                        @foreach ($kepadatan as $padat)
                                        <form method="post" action="/data_kepadatan/update" class="form-horizontal">
                                        {{csrf_field()}}  <!-- untuk generate token-->

                                            <input type="hidden" name="id" name="id" value="{{$padat->id}}">
                                        
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Kecamatan</label>
                                            <div class="col-sm-10">
                                                <select class="custom-select" name="nama_kecamatan">
                                                    <option selected>-Kecamatan-</option>
                                                    @foreach($kecamatan as $kec)
                                                        <option  value="{{$kec->id}}">{{$kec->nama_kecamatan}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Luas Daerah</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" id="example-text-input" name="luas_daerah" value="{{$padat->luas_daerah}}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Jumlah Penduduk</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" id="example-text-input" name="jumlah_penduduk" value="{{$padat->kepadatan_penduduk}}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Kepadatan Penduduk</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" id="example-text-input" name="kepadatan_penduduk" value="{{$padat->kepadatan_penduduk}}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Tahun</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" id="example-text-input" name="tahun" value="{{$padat->tahun}}">
                                            </div>
                                        </div>

                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-primary btn-rounded btn-md" value="simpan">Simpan</button>
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