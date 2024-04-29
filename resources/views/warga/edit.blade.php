@extends('layouts.master')
@section('content')

<h1>edit warga</h1>

<form action="/warga/{{$warga->id}}" method="post">
    @method('put')
    @csrf

    @csrf
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label" value="{{$warga->nama}}">Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="Nama">
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label" value="{{$warga->nik}}">Nik</label>
        <input type="text" class="form-control" name="nik" placeholder="NIK">

    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label" value="{{$warga->no_kk}}">No KK</label>
        <input type="text" class="form-control" name="no_kk" placeholder="No KK">
    </div>

    <div class="mb-3 col-3">
        <label for="oke" class="form-label">Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-select" id="oke">
            <option value="">Pilih</option>
            <option value="L">Laki - Laki</option>
            <option value="P">Perempuan</option>
        </select>
    </div>

    <div class="form-floating mb-3">
        <textarea name="alamat" class="form-control" placeholder="Alamat" id="floatingTextarea2" style="height: 100px" value="{{$warga->alamat}}"></textarea>
        <label for="floatingTextarea2">Alamat</label>
    </div>

    <input class="btn btn-success" type="submit" name="submit" value="Save">
</form>
@endsection
