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
                        <td> 
                            <a  href="{{route('pangkalan-edit',$a->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                            <a  href="#" role="button" onclick="hapus('{{$a->id}}')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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

@if(Auth::user()->level == 'AGEN')
<div class="floating-container">
    <a href="{{route('pangkalan-form')}}">
        <div class="floating-button">+</div>
    </a>
</div>
@endif

<script>
    function hapus(id){
        swal({
            title: "Yakin Inign Hapus Data?",
            text: "Silahkan lanjutkan jika yakin menghapus data!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url: "{{url('pangkalan-hapus')}}/"+id,
                    type: "GET",
                    dataType: "json",
                    success: function(data){
                        if (data) {
                            window.location.reload();
                        }
                    }
                })
            }
        });
        
    }
</script>
@endsection
