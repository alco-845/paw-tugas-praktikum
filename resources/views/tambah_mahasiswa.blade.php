@extends('template/template')

@section('title')
    Tambah Mahasiswa
@endsection

@section('content')
<div class="mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left hstack gap-3">
            <h2>Tambah Mahasiswa</h2>
            <a class="btn btn-secondary" style="margin-left: auto; margin-right: 0;" href="{{ route('mahasiswa.index') }}"> Kembali</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show mb-5" role="alert">
        <strong>Whoops!</strong> Input gagal.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close mt-3" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<form action="{{ route('mahasiswa.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIM:</strong>
                <input type="number" name="nim" class="form-control" placeholder="NIM" value="{{old('nim')}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{old('nama')}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="email" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <div class="form-group">
                <strong>Alamat:</strong>
                <textarea class="form-control" style="height:150px" name="alamat" placeholder="Alamat">{{old('alamat')}}</textarea>
            </div>
        </div>
        <div class="d-grid gap-2 mt-3 text-center mt-4">
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </div>

</form>
@endsection