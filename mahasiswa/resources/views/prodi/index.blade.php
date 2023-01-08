@extends('main')


@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="col-md-8">
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Program Studi</h6>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('prodi.create') }}" class="btn btn-success btn-icon-split">
                                <span class="icon text-white-50">
                                    +
                                </span>
                                <span class="text">Buat Data</span>
                            </a>
                            <div class="table-responsive mt-3">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama Program Studi</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach ($prodi as $pd)
                                        <tr>
                                            <td>{{ $loop->iteration }}.</td>
                                            <td>{{ $pd->nama_prodi }}</td>
                                            <td>{{ $pd->deskripsi }}</td>
                                            <td class="d-flex justify-content-center">
                                                <a href="{{ route('prodi.edit', $pd->id) }}"
                                                    class="btn btn-warning btn-circle mr-1"><i class="bi bi-pencil-square"></i></a>
                                            
                                                <form action="{{ route('prodi.destroy', $pd->id) }}" method="post">
                                                    @csrf
                                                    @method('Delete')
                                                    <button type="submit" class="btn btn-danger btn-circle"><i class="bi bi-trash3"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

@endsection


