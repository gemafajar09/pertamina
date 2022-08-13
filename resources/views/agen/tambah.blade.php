@extends('template.index')

@section('title')
Tambah Agen
@endsection

@section('content')
<div class="col-md-12">
    <div class="card card-primary card-outline">
        <div class="card-body">
            <form action="{{route('agen-simpan')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">SOLD TO</label>
                                    <input type="number" name="sold_to" id="sold_to" value="{{old('sold_to')}}" class="form-control {{ $errors->has('sold_to') ? 'is-invalid' : ''}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">MOR</label>
                                    <input type="number" name="mor" id="mor" value="{{old('mor')}}" class="form-control {{ $errors->has('mor') ? 'is-invalid' : ''}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <select name="provinsi" class="form-control" id="provinsi" value="{{old('provinsi')}}"
                                class="form-control {{ $errors->has('provinsi') ? 'is-invalid' : ''}}">
                                <option value="">-PILIH-</option>
                                @foreach($provinsi as $pr)
                                <option value="{{$pr->id}}">{{$pr->provinsi}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control {{ $errors->has('alamat') ? 'is-invalid' : ''}}"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nama Agen NSPO</label>
                            <input type="text" name="nama_nspo" id="nama_nspo" value="{{old('nama_nspo')}}" class="form-control {{ $errors->has('nama_nspo') ? 'is-invalid' : ''}}">
                        </div>
                        <div class="form-group">
                            <label for="">Kabupaten / Kota</label>
                            <select name="kabupaten" class="form-control {{ $errors->has('kabupaten') ? 'is-invalid' : ''}}" value="{{old('kabupaten')}}" id="kabupaten"
                                class="form-control">
                                <option value="">-PILIH-</option>
                                @foreach($kabupaten as $kb)
                                <option value="{{$kb->id}}">{{$kb->kabupaten}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" id="password" value="{{old('password')}}" class="form-control {{ $errors->has('password') ? 'is-invalid' : ''}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div align="right">
                        <button type="submit" style="width:30%" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
