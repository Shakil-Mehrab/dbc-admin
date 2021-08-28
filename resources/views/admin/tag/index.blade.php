<x-app-layout>
    <main class="flex-1 overflow-y-auto">
        <div class="pt-8 w-full mx-auto px-4 sm:px-6 lg:px-8">
            <x-header.breadcrumb title="Tag"></x-header.breadcrumb>
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div>
                @for ($i = 0; $i < 10; $i++)
                    <span
                        class="inline-flex items-center px-2.5 py-0.5 my-0.5 rounded-md text-sm font-medium bg-gray-100 text-gray-800">
                        Badge
                    </span>
                    <span
                        class="inline-flex items-center px-2.5 py-0.5 my-0.5 rounded-md text-sm font-medium bg-red-100 text-red-800">
                        Badge
                    </span>
                    <span
                        class="inline-flex items-center px-2.5 py-0.5 my-0.5 rounded-md text-sm font-medium bg-yellow-100 text-yellow-800">
                        Badge
                    </span>
                    <span
                        class="inline-flex items-center px-2.5 py-0.5 my-0.5 rounded-md text-sm font-medium bg-green-100 text-green-800">
                        Badge
                    </span>
                    <span
                        class="inline-flex items-center px-2.5 py-0.5 my-0.5 rounded-md text-sm font-medium bg-blue-100 text-blue-800">
                        Badge
                    </span>
                    <span
                        class="inline-flex items-center px-2.5 py-0.5 my-0.5 rounded-md text-sm font-medium bg-indigo-100 text-indigo-800">
                        Badge
                    </span>
                    <span
                        class="inline-flex items-center px-2.5 py-0.5 my-0.5 rounded-md text-sm font-medium bg-purple-100 text-purple-800">
                        Badge
                    </span>
                    <span
                        class="inline-flex items-center px-2.5 py-0.5 my-0.5 rounded-md text-sm font-medium bg-pink-100 text-pink-800">
                        Badge
                    </span>
                @endfor
            </div>
        </div>
    </main>
</x-app-layout>
