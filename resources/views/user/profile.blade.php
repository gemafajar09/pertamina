@extends('template.index')
@section('title')
Profile
@endsection

@section('content')
    <div class="col-md-4">

        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="{{asset('img/avatar.png')}}"
                        alt="User profile picture">
                </div>
                <h3 class="profile-username text-center">{{Auth::user()->nama}}</h3>
                <p class="text-muted text-center">{{Auth::user()->level}}</p>
                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>Provinsi</b> <a class="float-right">{{$user->provinsi}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Kabupaten / Kata</b> <a class="float-right">{{$user->kabupaten}}</a>
                    </li>
                </ul>
            </div>

        </div>

    </div>

    <div class="col-md-8">
        <div class="card  p-3">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Data Profile</h5>
                        </div>
                        <form action="{{route('edit-user',Auth::user()->id)}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control" name="nama" value="{{$user->nama}}">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{$user->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="">Telpon</label>
                                    <input type="number" class="form-control" name="telpon" value="{{$user->telpon}}">
                                </div>
                                <div class="form-group">
                                    <label for="">Sold To</label>
                                    <input type="number" class="form-control" name="sold_to" value="{{$user->sold_to}}">
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <textarea name="alamat" class="form-control">{{$user->alamat}}</textarea> 
                                </div>
                                <div class="form-group">
                                    <div align="right">
                                        <button type="submit" style="width:120px" class="btn btn-primary">Edit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Ganti Password</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{route('ganti-password',Auth::user()->id)}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">New Password</label>
                                    <input type="password" name="password" class="form-control" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Repeat Password</label>
                                    <input type="password" name="password1" class="form-control" id="">
                                </div>
                                <div class="form-group">
                                    <div align="right">
                                        <button type="submit" style="width:120px" class="btn btn-primary">Edit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
