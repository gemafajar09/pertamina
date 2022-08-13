@extends('template.index')

@section('title')
Pangkalan
@endsection

@section('content')
<div class="col-md-12">
    <div class="card card-primary card-outline">
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID Registrasi</th>
                        <th>Nama Pangkalan</th>
                        <th>No Telpon Kantor</th>
                        <th>Nama Pemilik</th>
                        <th>No Ktp Pemilik</th>
                        <th>No Hp Pemilik</th>
                        <th>Kecamatan</th>
                        <th>Kelurahan</th>
                        <th>Kode Pos</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pangkalan as $a)
                    <tr>
                        <td>{{$a->id_registrasi}}</td>
                        <td>{{$a->nama_pangkalan}}</td>
                        <td>{{$a->telpon_kantor}}</td>
                        <td>{{$a->nama_pemilik}}</td>
                        <td>{{$a->nik}}</td>
                        <td>{{$a->no_hp}}</td>
                        <td>{{$a->kecamatan}}</td>
                        <td>{{$a->kelurahan}}</td>
                        <td>{{$a->kode_pos}}</td>
                        <td>{{$a->alamat}}</td>
                        <td>{{$a->status}}</td>
                        <td> <a  href="{{route('pangkalan-edit',$a->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                            <a  href="{{route('pangkalan-hapus',$a->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID Registrasi</th>
                        <th>Nama Pangkalan</th>
                        <th>No Telpon Kantor</th>
                        <th>Nama Pemilik</th>
                        <th>No Ktp Pemilik</th>
                        <th>No Hp Pemilik</th>
                        <th>Kecamatan</th>
                        <th>Kelurahan</th>
                        <th>Kode Pos</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<div class="floating-container">
    <a href="{{route('pangkalan-form')}}">
        <div class="floating-button">+</div>
    </a>
    <!-- <div class="element-container">

        <a href="google.com"> 
            <span class="float-element tooltip-left">
                <i class="material-icons">phone
                </i></a>
        </span>
        <span class="float-element">
            <i class="material-icons">email
            </i>
        </span>
        <span class="float-element">
            <i class="material-icons">chat</i>
        </span>
    </div> -->
</div>
@endsection
