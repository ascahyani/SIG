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

                                        <h4 class="mt-0 header-title">Halaman Kelola Data Riwayat Pasien</h4><a href="/data_riwayat_pasien/tambah"class="btn btn-primary btn-md" id="right-panel-link">Tambah Data Baru</a>
                                        

                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>			
                                                <th>No.</th>
                                                <th>Nama Pasien</th>
                                                <th>Tahun</th>
                                                <th>Bulan</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                                <?php $no = 0 ;?>
                                                @foreach($riwayat_pasien as $riwayat)
                                                <?php $no++ ?>
                                                <tr>				
                                                    <td>{{ $no}}</td>
                                                    <td>{{ $riwayat->pasien->nama_pasien }}</td>
                                                    <td>{{ $riwayat->tahun }}</td>
                                                    <td>{{ $riwayat->bulan }}</td>
                                                    <td>{{ $riwayat->status}}</td>

                                                        <td>
                                                        <a href="/riwayat_pasien/edit/{{$riwayat->id}}" class="btn btn-success btn-sm">Edit</a>
                                                        |
                                                        <a class="btn btn-danger btn-sm">Hapus</a>
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