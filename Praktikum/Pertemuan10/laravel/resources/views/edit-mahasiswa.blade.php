@extends('template.main')


@include('template.header')
@include('template.footer')

@section('content')
<div class="flex justify-center pt-2">
<h1 class="font-bold leading-tight text-4xl mt-0 mb-7 text-primary pt-10">Edit Data Mahasiswa</h1>
</div>
<div class="flex justify-center pt-2">


<form class="w-sm max-w-lg pb-10"  method="POST" action="{{url('updateData')}}">
  @csrf
  <input type="hidden" name="nrpf" value="{{$dms->nrp}}">
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 py-2">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        NRP
      </label>
      <input name="nrp" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="21041100098" value="{{$dms->nrp}}">
    </div>
    <div class="w-full md:w-1/2 px-3 py-2">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Nama
      </label>
      <input name="nama" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Alexandra" value="{{$dms->nama}}">
    </div>

    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 py-2">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
       Email
      </label>
      <input name="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="email" placeholder="alexandra@gmail.com" value="{{$dms->email}}">
    </div>
    <div class="w-full md:w-1/2 px-3 py-2">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Alamat
      </label>
      <input name="alamat" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Surabaya" value="{{$dms->alamat}}">
    </div>
  </div>
  <div class="flex items-end py-2">
    <button class="bg-primary flex-shrink-0 bg-teal-500 hover:bg-teal-700 btn-primary hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
      Edit
    </button>
    <button class="text-primary flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded" type="button">
      Cancel
    </button>
  </div>
</form>
</div>

@endsection








