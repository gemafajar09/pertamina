@extends('template.index')

@section('title')
Provinsi
@endsection

@section('content')
<div class="col-md-12">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <button type="button" class="btn btn-primary" onclick="modalType()">Tambah Data</button>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Provinsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($provinsi as $i => $a)
                    <tr>
                        <td>{{$i+1}}</td>
                        <td>{{$a->provinsi}}</td>
                        <td>
                            <button type="button" onclick="edit('{{$a->id}}','{{$a->provinsi}}')" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                            <button type="button" onclick="hapus('{{$a->id}}')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
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
            <input type="text" required class="form-control" name="provinsi" id="provinsi" placeholder="provinsi">
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
        $('#title').html('Tambah Data Provinsi')
        $('#modalType').modal('show');
        $('#type').removeClass("is-invalid")
    }

    function simpan(){
        url = "{{url('provinsi-add')}}"
        if(idx != null){
            url = "{{url('provinsi-add')}}/"+idx
        }
        var provinsi = $('#provinsi').val()
        if(!type){
            $('#provinsi').addClass("is-invalid")
        }else{
            $.ajax({
                url: url,
                type: "POST",
                dataType: "json",
                data: {
                    '_token' : '{{ csrf_token() }}',
                    'provinsi' : provinsi
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

    function edit(id,provinsi){
        idx = id
        $('#provinsi').val(provinsi)
        $('#title').html('Edit Data provinsi')
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
