@extends('main')


@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="col-md-16">
                    <div class="card shadow mb-5">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Mahasiswa</h6>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('mahasiswa.create') }}" class="btn btn-success btn-icon-split">
                                <span class="icon text-white-50">
                                    +
                                </span>
                                <span class="text">Buat Data</span>
                            </a>
                            <div class="table-responsive mt-3">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th scope="col" class="text-center">No.</th>
                                        <th scope="col" class="text-center">Nama Mahasiswa</th>
                                        <th scope="col" class="text-center">Program Studi</th>
                                        <th scope="col" class="text-center">Kelas</th>
                                        <th scope="col" class="text-center">Semester</th>
                                        <th scope="col" class="text-center">Tahun Angkatan</th>
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach ($mahasiswa as $ms)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}.</td>
                                            <td class="text-center">{{ $ms->nama }}</td>
                                            <td class="text-center">{{ $ms->prodi->nama_prodi }}</td>
                                            <td class="text-center">{{ $ms->kelas }}</td>
                                            <td class="text-center">{{ $ms->semester }}</td>
                                            <td class="text-center">{{ $ms->tahun_angkatan }}</td>
                                            <td class="d-flex justify-content-center">
                                                <a href="{{ route('mahasiswa.detail', $ms->id) }}"
                                                    class="btn btn-primary btn-circle mr-1"><i class="bi bi-eye"></i></a>
                                                <a href="{{ route('mahasiswa.edit', $ms->id) }}"
                                                    class="btn btn-warning btn-circle mr-1"><i class="bi bi-pencil-square"></i></a>
                                            
                                                <form action="{{ route('mahasiswa.destroy', $ms->id) }}" method="post">
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


