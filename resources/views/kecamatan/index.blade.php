@extends('template.index')

@section('title')
Kecamatan
@endsection

@section('content')
<div class="col-md-12">
    <div class="card card-primary card-outline">
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kabupaten</th>
                        <th>Kecamatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kecamatan as $i => $a)
                    <tr>
                        <td>{{$i+1}}</td>
                        <td>{{$a->kabupaten}}</td>
                        <td>{{$a->kecamatan}}</td>
                        <td>
                            <button type="button" onclick="edit('{{$a->id}}','{{$a->kecamatan}}','{{$a->id_kabupaten}}')" class="btn btn-warning"><i class="fa fa-edit"></i></button>
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
            <label for="name">Kabupaten</label>
            <select name="kabupaten" id="kabupaten" class="form-control">
                <option value="">-PILIH-</option>
                @foreach($kabupaten as $kab)
                    <option value="{{$kab->id}}">{{$kab->kabupaten}}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="name">Kecamatan</label>
            <input type="text" required class="form-control" name="kecamatan" id="kecamatan" placeholder="kecamatan">
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
        $('#title').html('Tambah Data kecamatan')
        $('#modalType').modal('show');
        $('#kecamatan').removeClass("is-invalid")
    }

    function simpan(){
        url = "{{url('kecamatan-add')}}"
        if(idx != null){
            url = "{{url('kecamatan-add')}}/"+idx
        }
        var kabupaten = $('#kabupaten').val()
        var kecamatan = $('#kecamatan').val()
        if(!kabupaten || !kecamatan){
            $('#kabupaten').addClass("is-invalid")
            $('#kecamatan').addClass("is-invalid")
        }else{
            $.ajax({
                url: url,
                type: "POST",
                dataType: "json",
                data: {
                    '_token' : '{{ csrf_token() }}',
                    'kabupaten' : kabupaten,
                    'kecamatan' : kecamatan,
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

    function edit(id,kecamatan,kabupaten){
        idx = id
        $('#kabupaten').val(kabupaten)
        $('#kecamatan').val(kecamatan)
        $('#title').html('Edit Data Kecamatan')
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
                    url: "{{url('kecamatan-hapus')}}/"+id,
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
