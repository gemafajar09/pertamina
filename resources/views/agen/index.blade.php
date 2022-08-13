@extends('template.index')

@section('title')
Agen
@endsection

@section('content')
<div class="col-md-12">
    <div class="card card-primary card-outline">
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Sold To</th>
                        <th>Nama Agen NPSO</th>
                        <th>MOR</th>
                        <th>Provinsi</th>
                        <th>Kab / Kota</th>
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
                        <td>x</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Sold To</th>
                        <th>Nama Agen NPSO</th>
                        <th>MOR</th>
                        <th>Provinsi</th>
                        <th>Kab / Kota</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<div class="floating-container">
    <a href="{{route('agen-add')}}">
        <div class="floating-button">+</div>
    </a>
</div>
@endsection
