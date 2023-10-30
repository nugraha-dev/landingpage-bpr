@extends('backend')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1>Kelola Akun</h1>
                    </div>

                </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $error }}</strong>
                        </div>
                    @endforeach
                @endif
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="row">
                    <!-- left column -->


                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">Tambah Akun Baru</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('admin.user.store') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" id="password" name="password"
                                                    placeholder="" minlength="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="password_confirmation">Konfirmasi Password</label>
                                                <input type="password" class="form-control" id="password_confirmation"
                                                    name="password_confirmation" placeholder="" minlength="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">Tambah Akun</button>
                                </div>
                            </form>
                        </div>

                        <!-- /.card -->


                    </div>

                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Data Akun</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->

                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th style="width: 20%;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
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
                                                    <a href="{{ route('admin.user.show', $i->id) }}" class="btn"><button
                                                            type="button" class="btn btn-block btn-primary btn-xs"> <i
                                                                class="fas fa-edit"></i> Ubah Data</button>
                                                    </a>
                                                    <a href="{{ route('admin.user.destroy', $i->id) }}"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                                        class="btn"><button type="button"
                                                            class="btn btn-block btn-danger btn-xs"> <i
                                                                class="fas fa-trash"></i> Hapus Data</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
