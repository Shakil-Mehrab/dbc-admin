 <div class="relative flex-shrink-0">
     <div>
         {{-- <x-slot name="trigger"> --}}
         <button type="button"
             class="bg-white rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
             id="user-menu-button" aria-expanded="false" aria-haspopup="true">
             <span class="sr-only">Open user menu</span>
             <img class="h-8 w-8 rounded-full"
                 src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80"
                 alt="">
         </button>
         {{-- </x-slot> --}}
     </div>

     {{-- <x-slot name="content"> --}}
     <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
         role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
         <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
             id="user-menu-item-0">Your profile</a>

         <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
             id="user-menu-item-1">Sign out</a>
     </div>
     {{-- </x-slot> --}}
 </div>
