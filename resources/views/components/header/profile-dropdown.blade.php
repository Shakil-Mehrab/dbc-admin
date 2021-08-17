 <div class="relative flex-shrink-0">
     <x-dropdown>
         <x-slot name="trigger">
             <button type="button"
                 class="bg-white rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                 id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                 <span class="sr-only">Open user menu</span>
                 <img class="h-8 w-8 rounded-full"
                     src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80"
                     alt="">
             </button>
         </x-slot>

         <x-slot name="content">
             <a href="#" class="block px-4 py-2 text-sm text-gray-700" id="user-menu-item-0">Your profile</a>
             <div class="border-t border-gray-100"></div>

             <div class="block px-4 py-2 text-xs text-gray-400">
                 {{ __('Manage Account') }}
             </div>
             <div class="border-t border-gray-100"></div>

             <x-dropdown-link href="#">
                 {{ __('Profile') }}
             </x-dropdown-link>

             <div class="border-t border-gray-100"></div>

             <a href="#" class="block px-4 py-2 text-sm text-gray-700">Sign out</a>
         </x-slot>
     </x-dropdown>
 </div>
