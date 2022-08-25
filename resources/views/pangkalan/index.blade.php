@extends('template.index')

@section('title')
Pangkalan
@endsection

@section('content')
<div class="col-md-12">
    <div class="card card-primary card-outline">
        
        @if(Auth::user()->level == 'AGEN')
        <div class="card-header">
            <a href="{{route('pangkalan-form')}}" class="btn btn-primary">Tambah Data</a>
        </div>
        @endif
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
                            <button type="button" onclick="ket('{{$a->id}}')" class="btn btn-info"><i
                                    class="fa fa-eye"></i></button>
                            @if(Auth::user()->level == 'AGEN')
                            <a  href="{{route('pangkalan-edit',$a->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                            <a  href="#" role="button" onclick="hapus('{{$a->id}}')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal" id="keteranganModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body">
              <div class="card-header">
                <center>
                  <h5>Detail Pangkalan</h5>
                </center>
              </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <table style="width:100%">
                                <tr>
                                    <td>ID Registrasi</td>
                                    <td><b id="registrasi"></b></td>
                                    <td>Nama Pangkalan</td>
                                    <td><b id="nama_pangkalan"></b></td>
                                </tr>
                                <tr>
                                    <td>No. Telpon Kantor</td>
                                    <td><b id="telpon_kantor"></b></td>
                                    <td>Nama Pemilik</td>
                                    <td><b id="nama_pemilik"></b></td>
                                </tr>
                                <tr>
                                    <td>No. KTP</td>
                                    <td><b id="nik"></b></td>
                                    <td>Provinsi</td>
                                    <td><b id="provinsi"></b></td>
                                </tr>
                                <tr>
                                    <td>Kabupaten</td>
                                    <td><b id="kabupaten"></b></td>
                                    <td>Kecamatan</td>
                                    <td><b id="kecamatan"></b></td>
                                </tr>
                                <tr>
                                    <td>Kelurahan</td>
                                    <td><b id="kelurahan"></b></td>
                                    <td>Kode Pos</td>
                                    <td><b id="pos"></b></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td><b id="alamat"></b></td>
                                    <td>Status</td>
                                    <td><b id="statusx"></b></td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td colspan="2">
                                         <p id="keterangan"></p>
                                    </td>
                                </tr>
                            </table>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
        function ket(id) {
        $.ajax({
            url:"{{url('cek-aproval')}}/"+id,
            type:"GET",
            dataType:"JSON",
            success: function(res){
                $('#keteranganModal').modal('show')
                $('#registrasi').html(res.id_registrasi)
                $('#nama_pangkalan').html(res.nama_pangkalan)
                $('#telpon_kantor').html(res.telpon_kantor)
                $('#nama_pemilik').html(res.nama_pemilik)
                $('#nik').html(res.nik)
                $('#provinsi').html(res.nama_prov)
                $('#kabupaten').html(res.nama_kab)
                $('#kecamatan').html(res.nama_kec)
                $('#kelurahan').html(res.nama_kel)
                $('#pos').html(res.kode_pos)
                $('#alamat').html(res.alamat)
                $('#statusx').html(res.status)
                $('#keterangan').html(res.keterangan)
            }
        })
    }
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
