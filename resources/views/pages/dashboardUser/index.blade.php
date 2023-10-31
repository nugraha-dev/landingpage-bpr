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
                        <h1 class="m-0">Beranda</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Beranda</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>? Orang</h3>
                                <p>mengajukan kredit</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-columns"></i>
                            </div>
                            <a href="" class="small-box-footer">Lihat Detail <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </div>

            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Data Akun</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>No. Telepon /Whatsapp</th>
                                    <th>Pekerjaan</th>
                                    <th>Domisili</th>
                                    <th>Jenis Jaminan</th>
                                    <th>Dokumen Jaminan</th>
                                    <th>Lokasi Jaminan</th>
                                    <th>Jumlah Pinjaman</th>
                                    <th>Penghasilan Per Bulan</th>
                                    <th style="width: 20%;">Action</th>
                                </tr>
                            </thead>
                            {{-- <tbody>
                                @foreach ($data as $i)
                                    <tr>
                                        <td>{{ $i->email }}</td>
                                        <td>
                                            @if ($i->roles_id == 1)
                                                Admin
                                            @endif
                                            @if ($i->roles_id == 2)
                                                User
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('', $i->id) }}" class="btn"><button
                                                    type="button" class="btn btn-block btn-primary btn-xs"> <i
                                                        class="fas fa-edit"></i> Ubah Data</button>
                                            </a>
                                            <a href="{{ route('', $i->id) }}"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                                class="btn"><button type="button"
                                                    class="btn btn-block btn-danger btn-xs"> <i class="fas fa-trash"></i>
                                                    Hapus Data</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody> --}}
                        </table>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
