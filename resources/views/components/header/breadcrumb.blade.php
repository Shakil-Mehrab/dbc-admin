 <div class="flex flex-wrap justify-between bg-white p-4 my-2 shadow rounded-md">
     <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         {{ __(Str::ucfirst($title)) }}
     </h2>
     <a href="{{ url(Str::plural($title) . '/create') }}"
         class="inline-block text-gray-600 border border-gray-300 px-3 py-1 shadow-md rounded-md bg-white">
         Create New {{ Str::ucfirst($title) }}
     </a>
 </div>
