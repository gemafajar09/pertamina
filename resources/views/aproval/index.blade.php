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
                        <th>Provinsi</th>
                        <th>Kabupaten /Kota</th>
                        <th>Kecamatan</th>
                        <th>Kelurahan</th>
                        <th>Kode Pos</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pangkalan as $i => $a)
                    <tr>
                        <td>{{$a->id_registrasi}}</td>
                        <td>{{$a->nama_pangkalan}}</td>
                        <td>{{$a->telpon_kantor}}</td>
                        <td>{{$a->nama_pemilik}}</td>
                        <td>{{$a->nik}}</td>
                        <td>{{$a->no_hp}}</td>
                        <td>{{$a->nama_prov}}</td>
                        <td>{{$a->nama_kab}}</td>
                        <td>{{$a->nama_kec}}</td>
                        <td>{{$a->nama_kel}}</td>
                        <td>{{$a->kode_pos}}</td>
                        <td>{{substr($a->alamat,0,200)}}</td>
                        <td>{{$a->status}}</td>
                        <td>
                            @if(Auth::user()->level == 'ADMIN APROVAL')
                            <button type="button" class="btn btn-primary"
                                onclick="bukax('{{$a->id}}','{{$a->status}}')">Aproval</button>
                            @endif
                            <button type="button" onclick="ket('{{$a->id}}')" class="btn btn-info"><i
                                    class="fa fa-eye"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal" id="aproval" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Aproval Pangkalan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('aproval-up')}}" method="post">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    <div class="row">
                        <div class="col-md-4 mx-auto">
                            <label for="">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="">-SELECT-</option>
                                <option value="AKTIF">AKTIF</option>
                                <option value="TIDAK AKTIF">TIDAK AKTIF</option>
                            </select>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="form-group">
                                <textarea name="keterangan" placeholder="Keterangan" class="form-control"
                                    id="keterangan"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal" id="keteranganModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body">
              <div class="card-header">
                <center>
                  <h5>Keterangan Aproval Pangkalan</h5>
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
                                         <p id="keteranganx"></p>
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
                $('#keteranganx').html(res.keterangan)
            }
        })
    }

    function bukax(id, status) {
        $('#id').val(id)
        $('#status').val(status)
        $('#aproval').modal('show');
    }

</script>
@endsection
