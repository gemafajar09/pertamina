@extends('template.index')

@section('title')
Kelurahan
@endsection

@section('content')
<div class="col-md-12">
    <div class="card card-primary card-outline">
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kecamatan</th>
                        <th>Kelurahan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kelurahan as $i => $a)
                    <tr>
                        <td>{{$i+1}}</td>
                        <td>{{$a->kecamatan}}</td>
                        <td>{{$a->kelurahan}}</td>
                        <td>
                            <button type="button" onclick="edit('{{$a->id}}','{{$a->kelurahan}}','{{$a->id_kecamatan}}')" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                            <button type="button" onclick="hapus('{{$a->id}}')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="floating-container">
    <a href="#" onclick="modalType()">
        <div class="floating-button">+</div>
    </a>
</div>

<div class="modal" id="modalType" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="name">Kecamatan</label>
            <select name="kecamatan" id="kecamatan" class="form-control">
                <option value="">-PILIH-</option>
                @foreach($kecamatan as $kec)
                    <option value="{{$kec->id}}">{{$kec->kecamatan}}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="name">kelurahan</label>
            <input type="text" required class="form-control" name="kelurahan" id="kelurahan" placeholder="kelurahan">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" onclick="simpan()" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
    var url,idx;
    function modalType(){
        $('#title').html('Tambah Data kelurahan')
        $('#modalType').modal('show');
        $('#kelurahan').removeClass("is-invalid")
    }

    function simpan(){
        url = "{{url('kelurahan-add')}}"
        if(idx != null){
            url = "{{url('kelurahan-add')}}/"+idx
        }
        var kecamatan = $('#kecamatan').val()
        var kelurahan = $('#kelurahan').val()
        if(!kecamatan || !kelurahan){
            $('#kecamatan').addClass("is-invalid")
            $('#kelurahan').addClass("is-invalid")
        }else{
            $.ajax({
                url: url,
                type: "POST",
                dataType: "json",
                data: {
                    '_token' : '{{ csrf_token() }}',
                    'kecamatan' : kecamatan,
                    'kelurahan' : kelurahan,
                },
                success: function(data){
                    if (data) {
                        $('#modalType').modal('hide');
                        window.location.reload();
                    }
                }
            })
        }
    }

    function edit(id,kelurahan,kecamatan){
        idx = id
        $('#kecamatan').val(kecamatan)
        $('#kelurahan').val(kelurahan)
        $('#title').html('Edit Data kelurahan')
        $('#modalType').modal('show');
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
                    url: "{{url('kelurahan-hapus')}}/"+id,
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
