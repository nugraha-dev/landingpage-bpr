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
        <div class="row">
            <div class="col-md-6">
                <h2>Banner Sekarang</h2>
                <img src="{{ $currentBanner->image }}" alt="Banner Sekarang">
            </div>
        </div>

        <!-- Formulir Penggantian Banner -->
        <div class="row">
            <div class="col-md-6">
                <h2>Upload Banner Baru</h2>
                <form method="post" action="{{ route('update_banner') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="new_banner_image">Gambar Banner Baru</label>
                        <input type="file" name="new_banner_image" class="form-control" id="new_banner_image">
                    </div>
                    <div class="form-group">
                        <label for="start_date">Tanggal Mulai</label>
                        <input type="date" name="start_date" class="form-control" id="start_date">
                    </div>
                    <div class="form-group">
                        <label for="end_date">Tanggal Berakhir</label>
                        <input type="date" name="end_date" class="form-control" id="end_date">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Banner</button>
                </form>
            </div>
        </div>

        <!-- Banner Yang Akan Datang -->
        <div class="row">
            <div class="col-md-6">
                <h2>Banner Yang Akan Datang</h2>
                @if ($nextBanner)
                    <img src="{{ $nextBanner->image }}" alt="Banner Yang Akan Datang">
                @else
                    <p>Tidak ada banner yang akan datang.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
