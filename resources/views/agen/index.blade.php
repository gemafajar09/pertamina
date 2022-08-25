@extends('template.index')

@section('title')
Agen
@endsection

@section('content')
<div class="col-md-12">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <a href="{{route('agen-add')}}" class="btn btn-primary">Tambah Data</a>
        </div>
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
                    @foreach($agen as $a)
                    <tr>
                        <td>{{$a->sold_to}}</td>
                        <td>{{$a->nama}}</td>
                        <td>{{$a->mor}}</td>
                        <td>{{$a->provinsi}}</td>
                        <td>{{$a->kabupaten}}</td>
                        <td>
                            <a href="{{route('agen-edit',$a->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                            <a href="#" role="button" onclick="hapus('{{$a->id }}')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
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
                    url: "{{url('agen-hapus')}}/"+id,
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
