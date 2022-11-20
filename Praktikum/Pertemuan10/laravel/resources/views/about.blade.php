@extends('template.main')


@include('template.header')
@include('template.footer')

@section('content')
<div class="flex flex-col my-4 justify-center w-90 px-4">
    <h1 class="font-bold leading-tight text-4xl mt-0 mb-7 text-primary">About Me</h1>
    <center>
      <img class="w-64 mt-4 rounded" src="{{url("photo.jpg")}}" alt="">
      <h2 class="font-bold leading-tight text-3xl mt-2 mb-7 text-primary">Bima Satria</h2>
    </center>

    <h1 class="font-bold leading-tight text-3xl mt-0 mb-7 text-primary">Background</h1>
    <p class="mb-3 font-light text-gray-500 dark:text-gray-400">
      Nama saya Bima Satria Erlangga, Saya berasal dari Sukoharjo, Jawa Tengah. Saya merupakan anak ke 1 dari 2 bersaudara.
      Saya bersekolah mulai dari TK yang berada dekat dengan rumah saya yaitu di TK Aisiyah Sidodadi, setelah lulus TK saya melanjutkan 
      ke Sekolah Dasar yaitu di SDN Banaran no 1 selang 1 tahun setelah naik ke kelas 2 saya pindah ke SD Negeri Laweyan No. 54 Surakarta.
      Kemudian Setelah lulus dari Sekolah Dasar saya melanjutkan pendidikan ke jenjang Sekolah Menengah Pertama di SMP Negeri 15 Surakarta. 
      Selama 3 Tahun di SMP kemudian saya lulus dan melanjutkan ke SMK Negeri 2 Surakarta di Jurusan Rekayasa Perangkat Lunak.
      Pendidikan saya tidak berhenti sampai disitu, setelah lulus Sekolah Menengah kemudian saya melanjutkan ke Universitas yaitu di Universitas Trunojoyo Madura.
    </p>


    <h1 class="font-bold leading-tight text-3xl mt-3 mb-7 text-primary">Suka dan Duka PAW</h1>
    <p class="mb-3 font-light text-gray-500 dark:text-gray-400">
      Saat praktikum PAW menurut saya masih kurang menarik karena belum terdapat hal baru yang saya pelajari dari asisten praktikum,
      tetapi saat penjelasan praktikum menurut saya masih kurang bagus tetapi materi yang dijelaskan dapat saya terima dengan baik.
      Saran terkait praktikum PAW di tahun selanjutnya semoga bisa lebih baik dari sisi penjelasan dan materi yang diberikan, serta interaksi dengan para praktikan.
    </p>


</div>


@endsection