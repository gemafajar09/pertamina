@extends('template.index')

@section('title')
Edit User
@endsection

@section('content')
<div class="col-md-12">
    <div class="card card-primary card-outline">
        <div class="card-body">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="form-group">
                        <label for="">Nama User</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama User">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="">Telpon</label>
                        <input type="tel" name="telpon" class="form-control" placeholder="+62">
                    </div>
                    <div class="form-group">
                        <label for="">Provinsi</label>
                        <select name="provinsi" class="form-control" id="provinsi" class="form-control">
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Kabupaten / Kota</label>
                        <select name="kabupaten" class="form-control" id="kabupaten" class="form-control">
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="+62">
                    </div>
                    <div class="form-group">
                        <div align="right">
                            <button type="submit" style="width:30%" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
