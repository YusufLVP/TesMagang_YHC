@extends('main')


@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="col-md-6">
                    <div class="card shadow mb-5">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-warning">Data Mahasiswa</h4>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="mb-2">
                            <div class="input-group">
                                <span class="input-group-text col-3">Nama</span>
                                <input type="text" aria-label="First name" class="form-control" value="{{ $mahasiswa->nama }}" disabled>
                              </div>
                            </div>
                            <div class="mb-2">
                                <div class="input-group">
                                    <span class="input-group-text col-3">Program Studi</span>
                                    <input type="text" aria-label="First name" class="form-control" value="{{ $mahasiswa->Prodi->nama_prodi }}" disabled>
                                  </div>
                                </div>
                                <div class="mb-2">
                                    <div class="input-group">
                                        <span class="input-group-text col-3">Kelas</span>
                                        <input type="text" aria-label="First name" class="form-control" value="{{ $mahasiswa->kelas }}" disabled>
                                      </div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="input-group">
                                            <span class="input-group-text col-3">Semester</span>
                                            <input type="text" aria-label="First name" class="form-control" value="{{ $mahasiswa->semester }}" disabled>
                                          </div>
                                        </div>
                                        <div class="mb-2">
                                            <div class="input-group">
                                                <span class="input-group-text col-3">Tahun Angkatan</span>
                                                <input type="text" aria-label="First name" class="form-control" value="{{ $mahasiswa->tahun_angkatan }}" disabled>
                                              </div>
                                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            

@endsection