@extends('main')

@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">

    
@endsection

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-8">
                <div class="card border-1 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <label for="nama" class="form-label">Nama Mahasiswa</label>
                            <div class="input-group mb-3">
                                <input name="nama" type="text" class="form-control" id="nama" value="{{ $mahasiswa->nama }}">
                            </div>
                            <label for="prodi" class="form-label">Program Studi</label>
                            <select class="custom-select d-block w-100 form-control mb-3" id="prodi"
                                name="prodi_id">
                                <option selected>Pilih Program Studi</option>
                                @foreach ($prodi as $pd)
                                    <option value="{{ $pd->id }}" {{ $pd->id === $mahasiswa->prodi_id ? 'selected' : '' }}>{{ $pd->nama_prodi }}</option>
                                @endforeach
                            </select>
                            <label for="kelas" class="form-label">Kelas</label>
                            <div class="input-group mb-3">
                                <input name="kelas" type="text" class="form-control" id="kelas" value="{{ $mahasiswa->kelas }}">
                            </div>
                            <label for="semester" class="form-label">Semester</label>
                            <div class="input-group mb-3">
                                <input name="semester" type="text" class="form-control" id="semester" value="{{ $mahasiswa->semester }}">
                            </div>
                            <label for="tahun_angkatan" class="form-label">Tahun Angkatan</label>
                            <div class="input-group mb-3">
                                <input name="tahun_angkatan" type="text" class="form-control" id="tahun_angkatan" value="{{ $mahasiswa->tahun_angkatan }}">
                            </div>
                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"
        integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
