<div class="hidden w-28 bg-gray-700  md:block">
    {{-- overflow-y-auto --}}
    <div class="w-full py-6 flex flex-col items-center">
        <div class="flex-shrink-0 flex items-center">
            <img class="h-8 w-auto" src="{{ asset('images/dbc.png') }}" alt="Workflow">
        </div>
        <div class="flex-1 mt-6 w-full px-2 space-y-1">
            <a href="{{ url('/') }}"
                class="text-indigo-100 hover:bg-gray-800 hover:text-white group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium">

                <svg class="text-indigo-300 group-hover:text-white h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span class="mt-2">Dahshboard</span>
            </a>
            <a href="{{ url('articles') }}"
                class="text-indigo-100 hover:bg-gray-800 hover:text-white group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                </svg>
                <span class="mt-2">Articles</span>
            </a>
            <a href="{{ url('videos') }}"
                class="text-indigo-100 hover:bg-gray-800 hover:text-white group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                </svg>
                <span class="mt-2">Video</span>
            </a>
            <a href="{{ url('playlists') }}"
                class="text-indigo-100 hover:bg-gray-800 hover:text-white group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                </svg>
                <span class="mt-2">Playlist</span>
            </a>
            <a href="{{ url('categories') }}"
                class="text-indigo-100 hover:bg-gray-800 hover:text-white group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                </svg>
                <span class="mt-2">Category</span>
            </a>
            <a href="{{ url('topics') }}"
                class="text-indigo-100 hover:bg-gray-800 hover:text-white group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                </svg>
                <span class="mt-2">Topics</span>
            </a>
            <a href="{{ url('tags') }}"
                class="text-indigo-100 hover:bg-gray-800 hover:text-white group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                </svg>
                <span class="mt-2">Tags</span>
            </a>
            <a href="{{ url('regions') }}"
                class="text-indigo-100 hover:bg-gray-800 hover:text-white group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span class="mt-2">Regions</span>
            </a>
            <a href="{{ url('media') }}"
                class="bg-gray-800 text-white group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium"
                aria-current="page">
                <svg class="text-white h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <span class="mt-2">Media</span>
            </a>
            {{-- <a href="#"
                class="text-indigo-100 hover:bg-gray-800 hover:text-white group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium">
                <svg class="text-indigo-300 group-hover:text-white h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <span class="mt-2">Shared</span>
            </a>
            <a href="#"
                class="text-indigo-100 hover:bg-gray-800 hover:text-white group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium">
                <svg class="text-indigo-300 group-hover:text-white h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                </svg>
                <span class="mt-2">Albums</span>
            </a> --}}
            <a href="{{ url('setting') }}"
                class="text-indigo-100 hover:bg-gray-800 hover:text-white group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium">
                <svg class="text-indigo-300 group-hover:text-white h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span class="mt-2">Settings</span>
            </a>
        </div>
    </div>
</div>

{{-- wide left side --}}
{{-- <div class="hidden w-96 overflow-y-auto md:block flex-col border-r border-gray-200 pt-5 pb-4 bg-white">
    <div class="flex-shrink-0 flex items-center">
        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-600-mark-gray-800-text.svg"
            alt="Workflow">
    </div>
    <div class="mt-5 flex-grow flex flex-col">
        <nav class="flex-1 px-2 space-y-1 bg-white" aria-label="Sidebar">
            <div>
                <a href="#"
                    class="bg-gray-100 text-gray-900 group w-full flex items-center pl-2 py-2 text-sm font-medium rounded-md">

                    <svg class="text-gray-500 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Dashboard
                </a>
            </div>
            @for ($i = 0; $i < 5; $i++)


                <div class="space-y-1" x-data="{ open: false }">
                    <button type="button"
                        class="bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900 group w-full flex items-center pl-2 pr-1 py-2 text-left text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        aria-controls="sub-menu-1" aria-expanded="false" @click.prevent="open=!open">
                        <svg class="mr-3 flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <span class="flex-1">
                            Team
                        </span>
                        <svg class="text-gray-300 ml-3 flex-shrink-0 h-5 w-5 transform group-hover:text-gray-400 transition-colors ease-in-out duration-150"
                            viewBox="0 0 20 20" aria-hidden="true">
                            <path d="M6 6L14 10L6 14V6Z" fill="currentColor" />
                        </svg>
                    </button>


                    <div class="space-y-1" id="sub-menu-1" x-show="open">
                        <a href="#"
                            class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                            Overview
                        </a>

                        <a href="#"
                            class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                            Members
                        </a>

                        <a href="#"
                            class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                            Calendar
                        </a>

                        <a href="#"
                            class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                            Settings
                        </a>
                    </div>
                </div>

            @endfor
        </nav>
    </div>
</div> --}}
