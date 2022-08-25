<table>
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
            <th>BG can @220 Gram</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $a)
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
        </tr>
        @endforeach
    </tbody>
</table>