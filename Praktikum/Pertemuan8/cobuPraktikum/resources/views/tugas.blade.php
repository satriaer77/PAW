@extends('template.main')

@extends('template.header')

@section('content')
<div class="flex flex-col my-4 justify-center w-90 text-justify px-4">
<h1 class="my-4 font-medium leading-tight text-5xl mt-0 mb-4">Tugas Pendahuluan 6</h1>
    <p class="mb-3">
        1. Jelaskan apa yang dimaksud dengan Framework. <br>
        Jawab :<br>
        Framework merupakan kerangka sebuah backend dari website agar mempercepat
        proses development. Fungsi dari framework bisa dipanggil untuk mempercepat
        pengerjaan jadi tanpa harus membuat sebuah code untuk proses operasinya. 
        di buat. 
    </p>
    <p class="mb-3">
        2. Jelaskan keunggulan menggunakan Laravel Framework. <br>
        Jawab :<br>
        ● Proses Development jadi lebih cepat<br>
        ● Kode yang digunakan jadi lebih terstruktur<br>
        ● Development untuk team jadi lebih mudah karena built in functionnya sudah<br>
    </p>
    <p class="mb-3">
        3. Jelaskan mengenai konsep MVC dalam pemrograman Laravel. <br>
        Jawab :<br>
        Konsep MVC pada pemrograman laravel digunakan untuk memecah fungsi dari
        bagian Model , Controller dan View. Model pada konsep MVC digunakan untuk
        mengatur proses operasi query pada database, sedangkan pada View digunakan untuk
        mengatur tampilan dari website yang dibuat, yang terakhir adalah Controller yang
        digunakan untuk mengatur bagaimana data dikirm dan diterima.
    </p>

</div>


@endsection