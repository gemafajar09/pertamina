@extends('template.index')

@section('title')
Edit Pangkalan
@endsection

@section('content')
{{-- @dd(Auth::user()->id_provinsi) --}}
<div class="col-md-12">
    <div class="card card-primary card-outline">
        <form action="{{route('pangkalan-update')}}" method="post">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <input type="hidden" name='id' value="{{$pangkalan->id}}">
                        <div class="form-group">
                            <label for="">ID Registrasi</label>
                            <input type="number" name="id_register" id="id_register" class="form-control" placeholder="ID Registrasi" value="{{$pangkalan->id_registrasi}}">
                        </div>
                        <div class="form-group">
                            <label for="">Telpon Kantor</label>
                            <input type="number"  name="telpon_kantor" id="tepon_kantor" class="form-control" placeholder="+62" value="{{$pangkalan->telpon_kantor}}">
                        </div>
                        <div class="form-group">
                            <label for="">No Ktp Pemilik</label>
                            <input type="number" name="no_ktp" id="no_ktp" class="form-control" placeholder="No Ktp Pemilik" value="{{$pangkalan->nik}}">
                        </div>
                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <input type="hidden" name="idProvinsi" value="{{$provinsi->id}}">
                            <input type="text" name="provinsi" id="provinsi" class="form-control" value="{{$provinsi->provinsi}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <select name="kecamatan" id="kecamatan" onchange="kelurahans(this)" class="form-control">
                                <option value="">Pilih Kecamatan</option>
                                @foreach($kecamatan as $kec)
                                <option value="{{$kec->id}}" onclick="">{{$kec->kecamatan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Kode POS</label>
                            <input type="text" name="kode_pos" id="kode_pos" placeholder="Kode Pos" value="{{$pangkalan->kode_pos}}" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nama Pangkalan</label>
                            <input type="text" name="nama_pangkalan" id="nama_pangkalan" value="{{$pangkalan->nama_pangkalan}}" class="form-control" placeholder="Nama Pangkalan">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Pemilik</label>
                            <input type="text" name="nama_pemilik" value="{{$pangkalan->nama_pemilik}}" id="nama_pemilik" class="form-control" placeholder="Nama Pemilik">
                        </div>
                        <div class="form-group">
                            <label for="">No Hp Pemilik</label>
                            <input type="number" value="{{$pangkalan->no_hp}}" name="no_hp" id="no_hp" class="form-control" placeholder="No Hp Pemilik">
                        </div>
                        <div class="form-group">
                            <label for="">Kabupaten / Kota</label>
                            <input type="hidden" name="idKabupaten" value="{{$kabupaten->id}}">
                            <input type="text" name="kota" id="kota" value="{{$kabupaten->kabupaten}}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Kelurahan</label>
                            <select name="kelurahan" id="kelurahan" class="form-control">
                                <option value="">Pilih Kelurahan</option>
                                @foreach($kelurahan as $ak)
                                <option value="{{$ak->id}}" onclick="">{{$ak->kelurahan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control">{{$pangkalan->alamat}}</textarea>
                        </div>
                    </div>

                </div>
                <br><br>
                <div align="right" class="mt-10">
                    <button type="submit" style="width: 30%;" class="btn btn-primary mt-10">Edit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function kelurahans(id){
        $.ajax({
            url: '{{url('kelurahan-get')}}/'+id.value,
            type: 'get',
            dataType: 'html',
            success: function (res) {
                $('#kelurahan').html(res)
            }
        })
    }

    $(document).ready(function () {
        $('#kelurahan').val('{{$pangkalan->kelurahan}}')
        $('#kecamatan').val('{{$pangkalan->kecamatan}}')
    })
</script>
@endsection
