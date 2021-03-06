<div x-show="open" class="fixed inset-0 z-40 flex md:hidden"
    x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog"
    aria-modal="true">

    <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-600 bg-opacity-75"
        x-description="Off-canvas menu overlay, show/hide based on off-canvas menu state." @click="open = false"
        aria-hidden="true">
    </div>

    <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform"
        x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full"
        x-description="Off-canvas menu, show/hide based on off-canvas menu state."
        class="relative max-w-xs w-full bg-indigo-700 pt-5 pb-4 flex-1 flex flex-col">

        <div x-show="open" x-transition:enter="ease-in-out duration-300" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-300"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
            class="absolute top-1 right-0 -mr-14 p-1"
            x-description="Close button, show/hide based on off-canvas menu state.">
            <button type="button"
                class="h-12 w-12 rounded-full flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-white"
                @click="open = false">
                <svg class="h-6 w-6 text-white" x-description="Heroicon name: outline/x"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
                <span class="sr-only">Close sidebar</span>
            </button>
        </div>

        <div class="flex-shrink-0 px-4 flex items-center">
            <img class="h-8 w-auto" src="{{ asset('images/dbc.png') }}" alt="Workflow">
        </div>
        <div class="mt-5 flex-1 h-0 px-2 overflow-y-auto">
            <nav class="h-full flex flex-col">
                <div class="space-y-1">

                    <a href="{{ url('/') }}"
                        class="text-indigo-100 hover:bg-indigo-800 hover:text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium"
                        x-state:on="Current" x-state:off="Default"
                        x-state-description="Current: &quot;bg-indigo-800 text-white&quot;, Default: &quot;text-indigo-100 hover:bg-indigo-800 hover:text-white&quot;">
                        <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6" x-state:on="Current"
                            x-state:off="Default"
                            x-state-description="Current: &quot;text-white&quot;, Default: &quot;text-indigo-300 group-hover:text-white&quot;"
                            x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                        <span>Dahshboard</span>
                    </a>
                    <a href="{{ url('articles') }}"
                        class="text-indigo-100 hover:bg-indigo-800 hover:text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium"
                        x-state:on="Current" x-state:off="Default"
                        x-state-description="Current: &quot;bg-indigo-800 text-white&quot;, Default: &quot;text-indigo-100 hover:bg-indigo-800 hover:text-white&quot;">
                        <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6" x-state:on="Current"
                            x-state:off="Default"
                            x-state-description="Current: &quot;text-white&quot;, Default: &quot;text-indigo-300 group-hover:text-white&quot;"
                            x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z">
                            </path>
                        </svg>
                        <span>Articles</span>
                    </a>
                    <a href="{{ url('videos') }}"
                        class="text-indigo-100 hover:bg-indigo-800 hover:text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium"
                        x-state:on="Current" x-state:off="Default"
                        x-state-description="Current: &quot;bg-indigo-800 text-white&quot;, Default: &quot;text-indigo-100 hover:bg-indigo-800 hover:text-white&quot;">
                        <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6" x-state:on="Current"
                            x-state:off="Default"
                            x-state-description="Current: &quot;text-white&quot;, Default: &quot;text-indigo-300 group-hover:text-white&quot;"
                            x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z">
                            </path>
                        </svg>
                        <span>Video</span>
                    </a>
                    <a href="{{ url('playlists') }}"
                        class="text-indigo-100 hover:bg-indigo-800 hover:text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium"
                        x-state:on="Current" x-state:off="Default"
                        x-state-description="Current: &quot;bg-indigo-800 text-white&quot;, Default: &quot;text-indigo-100 hover:bg-indigo-800 hover:text-white&quot;">
                        <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6" x-state:on="Current"
                            x-state:off="Default"
                            x-state-description="Current: &quot;text-white&quot;, Default: &quot;text-indigo-300 group-hover:text-white&quot;"
                            x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2">
                            </path>
                        </svg>
                        <span>Playlist</span>
                    </a>
                    <a href="{{ url('categories') }}"
                        class="text-indigo-100 hover:bg-indigo-800 hover:text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium"
                        x-state:on="Current" x-state:off="Default"
                        x-state-description="Current: &quot;bg-indigo-800 text-white&quot;, Default: &quot;text-indigo-100 hover:bg-indigo-800 hover:text-white&quot;">
                        <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6" x-state:on="Current"
                            x-state:off="Default"
                            x-state-description="Current: &quot;text-white&quot;, Default: &quot;text-indigo-300 group-hover:text-white&quot;"
                            x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                            </path>
                        </svg>
                        <span>Category</span>
                    </a>
                    <a href="{{ url('topics') }}"
                        class="text-indigo-100 hover:bg-indigo-800 hover:text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium"
                        x-state:on="Current" x-state:off="Default"
                        x-state-description="Current: &quot;bg-indigo-800 text-white&quot;, Default: &quot;text-indigo-100 hover:bg-indigo-800 hover:text-white&quot;">
                        <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6" x-state:on="Current"
                            x-state:off="Default"
                            x-state-description="Current: &quot;text-white&quot;, Default: &quot;text-indigo-300 group-hover:text-white&quot;"
                            x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2">
                            </path>
                        </svg>
                        <span>Topics</span>
                    </a>
                    <a href="{{ url('tags') }}"
                        class="text-indigo-100 hover:bg-indigo-800 hover:text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium"
                        x-state:on="Current" x-state:off="Default"
                        x-state-description="Current: &quot;bg-indigo-800 text-white&quot;, Default: &quot;text-indigo-100 hover:bg-indigo-800 hover:text-white&quot;">
                        <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6" x-state:on="Current"
                            x-state:off="Default"
                            x-state-description="Current: &quot;text-white&quot;, Default: &quot;text-indigo-300 group-hover:text-white&quot;"
                            x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                            </path>
                        </svg>
                        <span>Tags</span>
                    </a>
                    <a href="{{ url('regions') }}"
                        class="text-indigo-100 hover:bg-indigo-800 hover:text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium"
                        x-state:on="Current" x-state:off="Default"
                        x-state-description="Current: &quot;bg-indigo-800 text-white&quot;, Default: &quot;text-indigo-100 hover:bg-indigo-800 hover:text-white&quot;">
                        <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6" x-state:on="Current"
                            x-state:off="Default"
                            x-state-description="Current: &quot;text-white&quot;, Default: &quot;text-indigo-300 group-hover:text-white&quot;"
                            x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>Regions</span>
                    </a>
                    <a href="{{ url('media') }}"
                        class="bg-indigo-800 text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium"
                        aria-current="page"
                        x-state-description="undefined: &quot;bg-indigo-800 text-white&quot;, undefined: &quot;text-indigo-100 hover:bg-indigo-800 hover:text-white&quot;">
                        <svg class="text-white mr-3 h-6 w-6"
                            x-state-description="undefined: &quot;text-white&quot;, undefined: &quot;text-indigo-300 group-hover:text-white&quot;"
                            x-description="Heroicon name: outline/photograph" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                        <span>Media</span>
                    </a>

                    <a href="{{ url('shared') }}"
                        class="text-indigo-100 hover:bg-indigo-800 hover:text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium"
                        x-state-description="undefined: &quot;bg-indigo-800 text-white&quot;, undefined: &quot;text-indigo-100 hover:bg-indigo-800 hover:text-white&quot;">
                        <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6"
                            x-state-description="undefined: &quot;text-white&quot;, undefined: &quot;text-indigo-300 group-hover:text-white&quot;"
                            x-description="Heroicon name: outline/user-group" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                        <span>Shared</span>
                    </a>

                    <a href="{{ url('albums') }}"
                        class="text-indigo-100 hover:bg-indigo-800 hover:text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium"
                        x-state-description="undefined: &quot;bg-indigo-800 text-white&quot;, undefined: &quot;text-indigo-100 hover:bg-indigo-800 hover:text-white&quot;">
                        <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6"
                            x-state-description="undefined: &quot;text-white&quot;, undefined: &quot;text-indigo-300 group-hover:text-white&quot;"
                            x-description="Heroicon name: outline/collection" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                            </path>
                        </svg>
                        <span>Albums</span>
                    </a>

                    <a href="{{ url('setting') }}"
                        class="text-indigo-100 hover:bg-indigo-800 hover:text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium"
                        x-state-description="undefined: &quot;bg-indigo-800 text-white&quot;, undefined: &quot;text-indigo-100 hover:bg-indigo-800 hover:text-white&quot;">
                        <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6"
                            x-state-description="undefined: &quot;text-white&quot;, undefined: &quot;text-indigo-300 group-hover:text-white&quot;"
                            x-description="Heroicon name: outline/cog" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Settings</span>
                    </a>

                </div>
            </nav>
        </div>
    </div>

    <div class="flex-shrink-0 w-14" aria-hidden="true">
        <!-- Dummy element to force sidebar to shrink to fit close icon -->
    </div>
</div>
