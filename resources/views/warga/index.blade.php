@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Warga') }}</div>

                    <div class="card-body">
                        <a class="btn btn-primary mb-3" href="/warga/create">tambah</a>
                        <table class="table table-hover">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>No KK</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach($warga as $w)
                                <tr>
                                    <td>{{$w->id}}</td>
                                    <td>{{$w->nama}}</td>
                                    <td>{{$w->nik}}</td>
                                    <td>{{$w->no_kk}}</td>
                                    <td>{{$w->jenis_kelamin}}</td>
                                    <td>{{$w->alamat}}</td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-block">
                                            <a class="btn btn-success" href="/warga/{{$w->id}}/edit">Edit</a>
                                            <form action="/warga/{{$w->id}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <input class="btn btn-danger" type="submit" value="Delete" onclick="confirm('Sure ?')">
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

    </div>
@endsection
