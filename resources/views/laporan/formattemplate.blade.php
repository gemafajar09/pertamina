<table>
    <thead>
        <tr>
            <th>Sold_to</th>
            <th>Agen</th>
            <th>ID Registrasi</th>
            <th>Nama Pangkalan</th>
            <th>Bulan</th>
            <th>Tahun</th>
            <th>BG 5,5 Kg</th>
            <th>BG 12 Kg</th>
            <th>E 50 Kg</th>
            <th>BG Can @220 gram</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $i => $a)
        <tr>
            <td>{{$sold_to}}</td>
            <td>{{$agen}}</td>
            <td>{{$a->id_registrasi}}</td>
            <td>{{$a->nama_pangkalan}}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>