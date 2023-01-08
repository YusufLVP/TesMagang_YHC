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
                        <form action="{{ route('prodi.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <label for="nama_prodi" class="form-label">Nama Program Studi</label>
                            <div class="input-group mb-3">
                                <input name="nama_prodi" type="text" class="form-control" id="nama_prodi">
                            </div>
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <div class="input-group mb-3">
                                <textarea name="deskripsi" type="text" class="form-control" id="deskripsi"></textarea>
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
