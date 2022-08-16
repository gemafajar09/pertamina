@extends('template.index')

@section('title')
Tambah Pangkalan
@endsection

@section('content')
{{-- @dd(Auth::user()->id_provinsi) --}}
<div class="col-md-12">
    <div class="card card-primary card-outline">
        <form action="{{route('pangkalan-simpan')}}" method="post">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">ID Registrasi</label>
                            <input type="number" name="id_register" id="id_register" class="form-control" placeholder="ID Registrasi" value="{{old('id_pregistrasi')}}">
                        </div>
                        <div class="form-group">
                            <label for="">Telpon Kantor</label>
                            <input type="number"  name="telpon_kantor" id="tepon_kantor" class="form-control" placeholder="+62" value="{{old('telpon_kantor')}}">
                        </div>
                        <div class="form-group">
                            <label for="">No Ktp Pemilik</label>
                            <input type="number" name="no_ktp" id="no_ktp" class="form-control" placeholder="No Ktp Pemilik" value="{{old('no_ktp')}}">
                        </div>
                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <input type="hidden" name="idProvinsi" value="{{$provinsi->id}}">
                            <input type="text" name="provinsi" id="provinsi" class="form-control" value="{{$provinsi->provinsi}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <input type="text" name="kecamatan" id="kecamatan" value="{{old('kecamatan')}}" placeholder="Kecamatan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Kode POS</label>
                            <input type="text" name="kode_pos" id="kode_pos" placeholder="Kode Pos" value="{{old('kode_pos')}}" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nama Pangkalan</label>
                            <input type="text" name="nama_pangkalan" id="nama_pangkalan" value="{{old('nama_pangkalan')}}" class="form-control" placeholder="Nama Pangkalan">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Pemilik</label>
                            <input type="text" name="nama_pemilik" value="{{old('nama_pemilik')}}" id="nama_pemilik" class="form-control" placeholder="Nama Pemilik">
                        </div>
                        <div class="form-group">
                            <label for="">No Hp Pemilik</label>
                            <input type="number" value="{{old('no_hp')}}" name="no_hp" id="no_hp" class="form-control" placeholder="No Hp Pemilik">
                        </div>
                        <div class="form-group">
                            <label for="">Kabupaten / Kota</label>
                            <input type="hidden" name="idKabupaten" value="{{$kabupaten->id}}">
                            <input type="text" name="kota" id="kota" value="{{$kabupaten->kabupaten}}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Kelurahan</label>
                            <input type="text" name="kelurahan" value="{{old('kelurahan')}}" id="kelurahan" placeholder="Kelurahan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control"></textarea>
                        </div>

                        <!-- <div class="form-group">
                            <label for="">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="AKTIF">AKTIF</option>
                                <option value="TIDAK AKTIF">TIDAK AKTIF</option>
                            </select>
                        </div> -->
                    </div>

                    

                </div>
                <br><br>
                <div align="right" class="mt-10">
                    <button type="submit" style="width: 30%;" class="btn btn-primary mt-10">Kirim</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
