@extends('template.index')

@section('title')
Aproval Pangkalan
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
                    <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                        <td>X</td>
                    </tr>
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
@endsection
