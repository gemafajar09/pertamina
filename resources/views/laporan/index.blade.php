@extends('template.index')

@section('title')
Laporan
@endsection

@section('content')
<div class="col-md-12">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <div class="float-left">
                <div class="form-inline">
                    @if(Auth::user()->level != 'AGEN')
                    <select name="agen" id="agen"
                        style="width: 200px; height:30px; border-radius:10px; margin-right:3px;">
                        <option value="0">-PILIH AGEN-</option>
                        @foreach($agens as $ag)
                        <option value="{{$ag->sold_to}}">{{$ag->sold_to}}-{{$ag->nama}}</option>
                        @endforeach
                    </select>
                    @else
                    <input type="hidden" id="agen" value="{{Auth::user()->sold_to}}">
                    @endif
                    <span style="margin-left:5px; margin-right:3px">Filter Tanggal : </span>
                    <input type="date" name="dari" id="dari"
                        style="width: 200px; height:30px; border-radius:10px; margin-right:3px;">
                    <span style="margin-right:3px">S/d</span>
                    <input type="date" name="sampai" id="sampai"
                        style="width: 200px; height:30px; border-radius:10px; margin-right:3px;">
                    <button type="button" onclick="cekdata()"
                        style="width:50px; height:30px; border-radius:10px; margin-left:3px; background:red;color:white; border-color:white"><i
                            class="fa fa-search"></i></button>
                </div>
            </div>
            <div class="float-right">
                <button type="button" onclick="bukax()" class="btn btn-primary btn-sm"><i
                        class="fa fa-upload mr-3"></i>Upload</button>
                <button type="button" onclick="bukaxs()" class="btn btn-success btn-sm"><i
                        class="fa fa-download mr-3"></i>Export</button>
            </div>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nama Agen</th>
                        <th>No Registrasi Pangkalan</th>
                        <th>Nama Pangkalan</th>
                        <th>Bulan</th>
                        <th>Tahun</th>
                        <th>BG 5,5 Kg</th>
                        <th>BG 12 Kg</th>
                        <th>E 50 Kg</th>
                        <th>BG Can @220 Gram</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($laporan as $a)
                    <tr>
                        <td>{{$a->nama}}</td>
                        <td>{{$a->id_registrasi}}</td>
                        <td>{{$a->nama_pangkalan}}</td>
                        <td>{{$a->bulan}}</td>
                        <td>{{$a->tahun}}</td>
                        <td>{{$a->bg_55}}</td>
                        <td>{{$a->bg_12}}</td>
                        <td>{{$a->e_50}}</td>
                        <td>{{$a->bg_can}}</td>
                        <td>
                            <button type="button" onclick="hapus('{{$a->id}}')" class="btn btn-danger"><i
                                    class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal" id="upload" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Upload Laporan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('upload-laporan')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Upload File Excel</label>
                        <input type="file" class="form-control" id="file" name="file">

                        <hr>
                        <span>
                            Download Template Laporan <a href="{{route('format-laporan')}}"><i
                                    class="fa fa-download"></i> Disini</a>
                        </span>
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

<div class="modal" id="export" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Export Laporan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('export-laporan')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                  @if(Auth::user()->level != 'AGEN')
                    <div class="form-group">
                        <select name="agen" class="form-control">
                            <option value="">-PILIH AGEN-</option>
                            @foreach($agens as $ag)
                            <option value="{{$ag->sold_to}}">{{$ag->sold_to}}-{{$ag->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    @else
                    <input type="hidden" name="agen" value="{{Auth::user()->sold_to}}">
                    @endif
                    <div class="form-inline">
                        <input type="date" required class="form-control" name="dari">
                        <span style="margin-right:3px">S/d</span>
                        <input type="date" required class="form-control" name="sampai">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Export</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function bukax() {
        $('#upload').modal('show');
    }

    function bukaxs() {
        $('#export').modal('show');
    }

    function cekdata() {
        var agen = $('#agen').val()
        var dari = $('#dari').val() ? $('#dari').val() : '';
        var sampai = $('#sampai').val() ? $('#sampai').val() : '';

        window.location = "{{url('laporan')}}/" + agen + "/" + dari + "/" + sampai
    }

    function hapus(id) {
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
                        url: "{{url('hapus-laporan')}}/" + id,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
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
