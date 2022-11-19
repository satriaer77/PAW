
@extends('template.main')

@extends('template.header')

@section('content')
<table>
    <tr>
        <th>NRP</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Email</th>
    </tr>
    @foreach($mahasiswa as $mhs)
    <tr>
        <td>{{$mhs["nrp"]}}</td>
        <td>{{$mhs["nama"]}}</td>
        <td>{{$mhs["alamat"]}}</td>
        <td>{{$mhs["email"]}}</td>
    </tr>
    @endforeach
</table>



@endsection
