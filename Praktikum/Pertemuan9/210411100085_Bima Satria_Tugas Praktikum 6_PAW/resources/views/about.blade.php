@extends('template.main')

@extends('template.header')

@section('content')
<div class="flex flex-col my-4 justify-center w-90 text-center px-4">
    <center><img class="w-64 mt-4 rounded" src="{{url("photo.jpg")}}" alt=""></center>
    
    <div class="max-w-sm mt-4 bg-slate-400 rounded overflow-hidden shadow-lg text-justify">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Bima Satria</div>
        <p class="text-gray-700 text-base">Nama     : Bima Satria</p>
        <p class="text-gray-700 text-base">NIM      : 210411100085</p>
        <p class="text-gray-700 text-base">Kelas    : PAW C</p>
        <p class="text-gray-700 text-base">Semester : 3</p>
        <p class="text-gray-700 text-base">Prodi    : Teknik Informatika</p>
        <p class="text-gray-700 text-base">Jurusan  : Teknik Informatika</p>
        <p class="text-gray-700 text-base">Fakultas : Twknik</p>
        <p class="text-gray-700 text-base">Universitas : Universitas Trunojoyo Madura</p>
      </div>
    </div>

</p>

</div>


@endsection