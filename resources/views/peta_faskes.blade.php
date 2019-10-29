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
                               <li class="breadcrumb-item active mdi mdi-chevron-right ">Halaman Admin</li>
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
                                        <form method="post" action="/peta_faskes/cari" class="form-horizontal">

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
                                        </form>

                                      
                                    </div>
                                </div>
                            </div> <!-- end col -->
       
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

@endpush
