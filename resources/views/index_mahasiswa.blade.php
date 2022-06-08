@extends('template/template')

@section('title')
    Daftar Mahasiswa
@endsection

@section('content')
    <div class="mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left hstack gap-3">
                <h2>Daftar Mahasiswa</h2>
                <a class="btn btn-success" style="margin-left: auto; margin-right: 0;" href="{{ route('mahasiswa.create') }}"> Tambah Mahasiswa</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('succes'))
    <div class="alert alert-success alert-dismissible fade show mb-5" role="alert">
        <p class="mt-3">{{ $message }}</p>
        <button type="button" class="btn-close mt-3" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <table class="table table-bordered">
        <tr class="text-center">
            <th width="20px">No</th>
            <th>NIM</th>
            <th width="280px">Nama</th>
            <th width="280px">Email</th>
            <th width="280px">Alamat</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($mahasiswa as $row)
        <tr class="text-center">
            <td>{{ ++$i }}</td>
            <td>{{ $row->nim }}</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->alamat }}</td>
            <td class="text-center">
                <form action="{{ route('mahasiswa.destroy',$row->id) }}" method="POST">

                    <a class="btn btn-primary btn-sm" href="{{ route('mahasiswa.edit',$row->id) }}">Ubah</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $mahasiswa->links() !!}

@endsection