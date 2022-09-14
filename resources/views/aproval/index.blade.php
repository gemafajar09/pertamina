@extends('template.index')

@section('title')
    Aproval Pangkalan
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID Registrasi</th>
                            <th>Nama Pangkalan</th>
                            <th>No Telpon Kantor</th>
                            <th>Nama Pemilik</th>
                            <th>No Ktp Pemilik</th>
                            <th>No Hp Pemilik</th>
                            <th>Provinsi</th>
                            <th>Kabupaten /Kota</th>
                            <th>Kecamatan</th>
                            <th>Kelurahan</th>
                            <th>Kode Pos</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pangkalan as $i => $a)
                            <tr>
                                <td>{{ $a->id_registrasi }}</td>
                                <td>{{ $a->nama_pangkalan }}</td>
                                <td>{{ $a->telpon_kantor }}</td>
                                <td>{{ $a->nama_pemilik }}</td>
                                <td>{{ $a->nik }}</td>
                                <td>{{ $a->no_hp }}</td>
                                <td>{{ $a->provinsi }}</td>
                                <td>{{ $a->kabupaten }}</td>
                                <td>{{ $a->kecamatan }}</td>
                                <td>{{ $a->kelurahan }}</td>
                                <td>{{ $a->kode_pos }}</td>
                                <td>{{ $a->alamat }}</td>
                                <td>{{ $a->status == 'AKTIF' ? 'DISETUJUI' : 'TIDAK DISETUJUI' }}</td>
                                <td>
                                    @if (Auth::user()->level == 'ADMIN APROVAL')
                                        <button type="button" class="btn btn-primary"
                                            onclick="bukax('{{ $a->id }}','{{ $a->status }}')">Aproval</button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal" id="aproval" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Aproval Pangkalan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('aproval-up') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" id="id">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4 mx-auto">
                                <label for="">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="">-SELECT-</option>
                                    <option value="AKTIF">DISETUJUI</option>
                                    <option value="TIDAK AKTIF">TIDAK DISETUJUI</option>
                                </select>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <textarea name="keterangan" placeholder="Keterangan" class="form-control" id="keterangan"></textarea>
                                </div>
                            </div>
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

    <script>
        function bukax(id, status) {
            $('#id').val(id)
            $('#status').val(status)
            $('#aproval').modal('show');
        }
    </script>
@endsection
