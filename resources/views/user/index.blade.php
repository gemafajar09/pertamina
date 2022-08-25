@extends('template.index')

@section('title')
User
@endsection

@section('content')
<div class="col-md-12">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <a href="{{route('user-add')}}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Level</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Telpon</th>
                        <th>Provinsi</th>
                        <th>Kabupaten</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $a)
                    <tr>
                        <td>{{$a->level}}</td>
                        <td>{{$a->nama}}</td>
                        <td>{{$a->email}}</td>
                        <td>{{$a->telpon}}</td>
                        <td>{{$a->provinsi}}</td>
                        <td>{{$a->kabupaten}}</td>
                        <td>
                            <button class="btn btn-warning" type="button"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Level</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Telpon</th>
                        <th>Provinsi</th>
                        <th>Kabupaten</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection
