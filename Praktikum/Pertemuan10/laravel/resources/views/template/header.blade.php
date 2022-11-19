
@section('header')
<nav class="bg-slate-300 border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-50">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
  <a href="{{url('/')}}" class="flex items-center">
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Simple Siakad</span>
  </a>
  <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="{{url('/')}}" class="block py-2 pr-4 pl-3 text-gray-700  bg-blue-700 rounded md:bg-transparent @if($page == "dataMhs")  md:text-blue-700 @endif md:p-0 dark:text-white" @if($page == "dataMhs")  aria-current="page" @endif>Data Mahasiswa</a>
        </li>
        <li>
          <a href="{{url('/inputData')}}" class="block py-2 pr-4 pl-3 text-gray-700  bg-blue-700 rounded md:bg-transparent @if($page == "inputMhs") md:text-blue-700 @endif md:p-0 " @if($page == "inputMhs") aria-current="page"  @endif>Input Data</a>
        </li>
        <li>
          <a href="{{url('/about')}}" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 @if($page == "about") md:text-blue-700 @endif">About Me</a>
        </li>
      </ul>
   </div>


    
    
  </div>
</nav>
@endsection