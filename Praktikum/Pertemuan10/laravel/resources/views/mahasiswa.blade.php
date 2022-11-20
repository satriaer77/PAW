@extends('template.main')

@include('template.header')
@include('template.footer')

@section('content')
<div class="flex flex-col my-4 justify-center w-90 px-10">
  <h1 class="font-bold leading-tight text-4xl mt-0 mb-7 text-primary">Data Mahasiswa</h1>
  <div class="grid grid-cols-4 gap-4 justify-center">
 
    @foreach($dms as $dm)
      <div class="w-full max-w-xs bg-white my-2 border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-col items-center pb-10 pt-10 px-2">
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{url('profile.jpg')}}" alt="Picture"/>
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{$dm->nama}}</h5>
            <span class="text-sm text-gray-500 dark:text-gray-400">{{$dm->nrp}}</span>
            <span class="text-sm text-gray-500 dark:text-gray-400">{{$dm->email}}</span>
            <p class="text-gray-700 text-base text-center">{{$dm->alamat}}</p>
            <div class="flex mt-4 space-x-3 md:mt-6">
                <form method="POST" action="/editData">
                  @csrf
                  <input type="hidden" name="nrp" value="{{$dm->nrp}}">
                  <button class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 bg-primary" type="submit">Edit</button>
                </form>

                <form method="POST" action="/deleteData">
                  @csrf
                  <input type="hidden" name="nrp" value="{{$dm->nrp}}">

                  <button class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200" type="submit">Delete</button>
                </form>
            </div>
        </div>

      </div>
    @endforeach
  </div>  

</div>

@endsection

