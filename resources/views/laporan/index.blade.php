@extends('template.index')

@section('title')
Laporan
@endsection

@section('content')
<div class="col-md-12">
    <div class="card card-primary card-outline">
      <div class="card-header">
        <div class="float-right">
            <button class="btn btn-primary btn-sm"><i class="fa fa-upload mr-3"></i>Upload</button>
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
            </table>
        </div>
    </div>
</div>

<div class="modal" id="aproval" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Upload Laporan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post">
        @csrf
        <div class="modal-body">
         <!--  -->
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
    function bukax(id,status){
        $('#id').val(id)
        $('#status').val(status)
        $('#aproval').modal('show');
    }
</script>
@endsection
