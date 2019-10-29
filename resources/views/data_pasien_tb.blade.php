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

                                        <h4 class="mt-0 header-title">Halaman Kelola Data Pasien</h4>
                                        
                                        <a href="/data_pasien_tb/tambah"class="btn btn-primary btn-md float-right mb-4" id="right-panel-link">Tambah Data Baru</a>
                                        
                                        <div class="table-responsive">
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>			
                                                <th>No.</th>
                                                <th>Nama Kecamatan</th>
                                                <th>Nama Faskes</th>
                                                <th>Jenis TB</th>
                                                <th>Nama</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Alamat</th>
                                                <th>Tipe Diagnosa</th>
                                                <th>latitude</th>
                                                <th>longitude</th>
                                                <th>Mulai Pengobatan</th>
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                                <?php $no = 0 ;?>
                                                @foreach($data_pasien as $pasien)
                                                <?php $no++ ?>
                                                <tr>				
                                                    <td>{{ $no}}</td>
                                                    <td>{{ $pasien->kec->nama_kecamatan}}</td>
                                                    <td>{{ $pasien->faskes->nama_faskes }}</td>
                                                    <td>{{ $pasien->jenis_tb }}</td>
                                                    <td>{{ $pasien->nama_pasien }}</td>
                                                    <td>{{ $pasien->tanggal_lahir }}</td>
                                                    <td>{{ $pasien->alamat }}</td>
                                                    <td>{{ $pasien->tipe_diagnosa }}</td>
                                                    <td>{{ $pasien->latitude }}</td>
                                                    <td>{{ $pasien->longitude }}</td>
                                                    <td>{{ $pasien->tanggal_mulaipengobatan }}</td>
                                                        <td>
                                                        <a href="/data_pasien_tb/edit/{{$pasien->id}}" class="btn btn-success btn-sm">Edit</a>
                                                        |
                                                        <a href="/data_pasien_tb/hapus/{{$pasien->id}}" class="btn btn-danger btn-sm">Hapus</a>
                                                        </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                </div> <!-- container-fluid -->
       
       </div> <!-- content -->
       
    </div>

@endsection