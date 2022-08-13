@extends('template.index')

@section('title')
Tambah User
@endsection

@section('content')
<div class="col-md-12">
    <div class="card card-primary card-outline">
        <form action="{{route('user-simpan')}}" method="post">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="form-group">
                            <label for="">Nama User</label>
                            <input type="text" autocomplete="off" name="nama" class="form-control"
                                value="{{old('nama')}}" placeholder="Nama User">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" value="{{old('email')}}"
                                placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="">Telpon</label>
                            <input type="tel" name="telpon" class="form-control" value="{{old('telpon')}}"
                                placeholder="+62">
                        </div>
                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <select name="provinsi" class="form-control" id="provinsi" value="{{old('provinsi')}}"
                                class="form-control">
                                <option value="">-PILIH-</option>
                                @foreach($provinsi as $pr)
                                <option value="{{$pr->id}}">{{$pr->provinsi}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Kabupaten / Kota</label>
                            <select name="kabupaten" class="form-control" value="{{old('kabupaten')}}" id="kabupaten"
                                class="form-control">
                                <option value="">-PILIH-</option>
                                @foreach($kabupaten as $kb)
                                <option value="{{$kb->id}}">{{$kb->kabupaten}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" autocomplete="off" class="form-control"
                                value="{{old('password')}}" placeholder="********">
                        </div>
                        <div class="form-group">
                            <label for="">Level</label>
                            <select name="level" class="form-control" value="{{old('level')}}" id="level"
                                class="form-control">
                                <option value="">-PILIH-</option>
                                <option value="SUPER ADMIN">SUPER ADMIN</option>
                                <option value="ADMIN APROVAL">ADMIN APROVAL</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div align="right">
                                <button type="submit" style="width:30%" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
