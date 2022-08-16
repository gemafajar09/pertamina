@extends('template.index')

@section('title')
Kabupaten
@endsection

@section('content')
<div class="col-md-12">
    <div class="card card-primary card-outline">
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Provinsi</th>
                        <th>Kabupaten</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kabupaten as $i => $a)
                    <tr>
                        <td>{{$i+1}}</td>
                        <td>{{$a->provinsi}}</td>
                        <td>{{$a->kabupaten}}</td>
                        <td>
                            <button type="button" onclick="edit('{{$a->id}}','{{$a->kabupaten}}','{{$a->id_provinsi}}')" class="btn btn-warning"><i class="fa fa-edit"></i></button>
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
            <label for="name">Provinsi</label>
            <select name="provinsi" id="provinsi" class="form-control">
                <option value="">-PILIH-</option>
                @foreach($provinsi as $prov)
                    <option value="{{$prov->id}}">{{$prov->provinsi}}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="name">Kabupaten</label>
            <input type="text" required class="form-control" name="kabupaten" id="kabupaten" placeholder="kabupaten">
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
        $('#title').html('Tambah Data Kabupaten')
        $('#modalType').modal('show');
        $('#kabupaten').removeClass("is-invalid")
    }

    function simpan(){
        url = "{{url('kabupaten-add')}}"
        if(idx != null){
            url = "{{url('kabupaten-add')}}/"+idx
        }
        var provinsi = $('#provinsi').val()
        var kabupaten = $('#kabupaten').val()
        if(!provinsi || !kabupaten){
            $('#provinsi').addClass("is-invalid")
            $('#kabupaten').addClass("is-invalid")
        }else{
            $.ajax({
                url: url,
                type: "POST",
                dataType: "json",
                data: {
                    '_token' : '{{ csrf_token() }}',
                    'provinsi' : provinsi,
                    'kabupaten' : kabupaten,
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

    function edit(id,kabupaten,provinsi){
        idx = id
        $('#kabupaten').val(kabupaten)
        $('#provinsi').val(provinsi)
        $('#title').html('Edit Data Kabupaten')
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
                    url: "{{url('provinsi-hapus')}}/"+id,
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
