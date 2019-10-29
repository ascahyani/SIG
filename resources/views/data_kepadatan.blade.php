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

                                    <h4 class="mt-0 header-title">Halaman Kelola Data Kepadatan</h4><a href="/data_kepadatan/tambah" class="btn btn-primary btn-md" id="right-panel-link">Tambah Data Baru</a>
                                       
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nama Kecamatan</th>
                                                    <th>Luas Daerah</th>
                                                    <th>Jumlah Penduduk</th>
                                                    <th>Kepadatan Penduduk</th>
                                                    <th>Tahun</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 0 ;?>
                                                @foreach($data_kepadatan as $padat)
                                                <?php $no++ ?>
                                            <tr>
                                                <td>{{ $no}}</td>
                                                <td>{{ $padat->kec->nama_kecamatan }}</td>
                                                <td>{{ $padat->luas_daerah }}</td>
                                                <td>{{ $padat->jumlah_penduduk }}</td>
                                                <td>{{ $padat->kepadatan_penduduk }}</td>
                                                <td>{{ $padat->tahun }}</td>
                                               
                                                    <td>
                                                    <a href="/data_kepadatan/edit/{{$padat->id}}" class="btn btn-success btn-sm">Edit</a>
                                                    |
                                                    <a href="/data_kepadatan/hapus/{{$padat->id}}" class="btn btn-danger btn-sm">Hapus</a>
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