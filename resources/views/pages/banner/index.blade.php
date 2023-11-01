@extends('backend')

@extends('footers.index')
{{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Banner</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Banner</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Banner Sekarang -->
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Banner Sekarang</h3>
                </div>
                <img src="{{ $currentBanner->image }}" alt="Banner Sekarang">
            </div>
        </div>

        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Upload Banner Baru</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('admin.banner.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="banner_nanti">Gambar Banner Baru</label>
                                    <input type="file" name="banner_nanti" class="form-control" id="banner_nanti">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tgl_awal">Tanggal Mulai</label>
                                    <input type="date" name="start_date" class="form-control" id="tgl_awal">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tgl_akhir">Tanggal Berakhir</label>
                                    <input type="date" name="end_date" class="form-control" id="tgl_akhir">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan Banner</button>
                            </div>
                </form>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Banner Yang Akan Datang</h3>
                </div>
                @if ($nextBanner)
                    <img src="{{ $nextBanner->image }}" alt="Banner Yang Akan Datang">
                @else
                    <p>Tidak ada banner yang akan datang.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
