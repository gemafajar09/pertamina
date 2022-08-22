    <option value="">-PILIH-</option>
@foreach($kelurahan as $a)
    <option value="{{$a->id}}">{{$a->kelurahan}}</option>
@endforeach