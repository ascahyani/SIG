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
                                        <li class="breadcrumb-item active">Halaman Kelola Data Indeks RTPHBS</li>
                                        
                                    </ol>
                       </div>
                   </div>
               </div>
               <!-- end row -->

               <div class="row">
                            <div class="col-12">
                                <div class="card m-b-20">
                                    <div class="card-body">

                                        <h4 class="mt-0 header-title">Halaman Kelola Data Jenis Tuberkulosis</h4><a href="/data_indeks_rtphbs/tambah" class="btn btn-primary btn-md" id="right-panel-link">Tambah Data Baru</a>
                                     
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            
                                            <thead>
                                                <tr>			
                                                    <th>No.</th>
                                                    <th>Kecamatan</th>
                                                    <th>Tahun</th>
                                                    <th>Jumlah RTPHBS</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $no = 0 ;?>
                                            @foreach($indeks_rtphbs as $indeks)
                                            <?php $no++ ?>
                                            <tr>				
                                                <td>{{ $no}}</td>
                                                <td>{{ $indeks->kec->nama_kecamatan }}</td>
                                                <td>{{ $indeks->tahun }}</td>
                                                <td>{{ $indeks->jumlah_rtphbs }}</td>

                                                    <td>
                                                    <a href="/data_indeks_rtphbs/edit/{{$indeks->id}}" class="btn btn-success btn-sm">Edit</a>
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