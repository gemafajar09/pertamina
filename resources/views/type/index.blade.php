@extends('template.index')

@section('title')
Type Pangkalan
@endsection

@section('content')
<div class="col-md-12">
    <div class="card card-primary card-outline">
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Type Pangkalan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($type as $i => $a)
                    <tr>
                        <td>{{$i+1}}</td>
                        <td>{{$a->type}}</td>
                        <td>
                            <button type="button" onclick="edit('{{$a->id}}','{{$a->type}}')" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                            <button type="button" onclick="hapus('{{$a->id}}')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Type Pangkalan</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
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
            <label for="name">Type</label>
            <input type="text" required class="form-control" name="type" id="type" placeholder="Type Pangkalan">
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
        $('#title').html('Tambah Data Type')
        $('#modalType').modal('show');
        $('#type').removeClass("is-invalid")
    }

    function simpan(){
        url = "{{url('type-add')}}"
        if(idx != null){
            url = "{{url('type-add')}}/"+idx
        }
        var type = $('#type').val()
        if(!type){
            $('#type').addClass("is-invalid")
        }else{
            $.ajax({
                url: url,
                type: "POST",
                dataType: "json",
                data: {
                    '_token' : '{{ csrf_token() }}',
                    'type' : type
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

    function edit(id,type){
        idx = id
        $('#type').val(type)
        $('#title').html('Edit Data Type')
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
                    url: "{{url('type-hapus')}}/"+id,
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
