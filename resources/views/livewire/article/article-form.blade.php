<div class="bg-white rounded-lg shadow overflow-hidden">
    <div class="divide-y divide-gray-200 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x">
        <form class="divide-y divide-gray-200 lg:col-span-12" action="#" method="POST">
            <div class="py-6 px-4 sm:p-6 lg:pb-8">




                <div class="mt-6 grid grid-cols-12 gap-6">
                    <div class="col-span-12 sm:col-span-6">
                        <label for="first-name" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-sky-500 focus:border-sky-500 sm:text-sm">
                    </div>

                    <div class="col-span-12 sm:col-span-6">
                        <label for="last-name" class="block text-sm font-medium text-gray-700">Meta
                            Title</label>
                        <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-sky-500 focus:border-sky-500 sm:text-sm">
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="first-name"
                            class="block text-sm font-medium text-gray-700">Reporter/Author/Writer</label>
                        <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-sky-500 focus:border-sky-500 sm:text-sm">
                    </div>


                    <div class="col-span-12 sm:col-span-6">
                        <label for="last-name" class="block text-sm font-medium text-gray-700">Kicker</label>
                        <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-sky-500 focus:border-sky-500 sm:text-sm">
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="about" class="block text-sm font-medium text-gray-700">
                            About
                        </label>
                        <div class="mt-1">
                            <textarea id="about" name="about" rows="3"
                                class="shadow-sm focus:ring-sky-500 focus:border-sky-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                        </div>
                        <p class="mt-2 text-sm text-gray-500">
                            Brief description for your profile. URLs are hyperlinked.
                        </p>
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="about" class="block text-sm font-medium text-gray-700">
                            About
                        </label>
                        <div class="mt-1">
                            <textarea id="about" name="about" rows="3"
                                class="shadow-sm focus:ring-sky-500 focus:border-sky-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                        </div>
                        <p class="mt-2 text-sm text-gray-500">
                            Brief description for your profile. URLs are hyperlinked.
                        </p>
                    </div>

                    <div class="col-span-12">
                        <label for="cover-photo" class="block text-sm font-medium text-gray-700">
                            Cover photo
                        </label>
                        <div
                            class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                    viewBox="0 0 48 48" aria-hidden="true">
                                    <path
                                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    </path>
                                </svg>
                                <div class="flex text-sm text-gray-600">
                                    <label for="file-upload"
                                        class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                        <span>Upload a file</span>
                                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">
                                    PNG, JPG, GIF up to 10MB
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="url" class="block text-sm font-medium text-gray-700">Thumbnail</label>
                        <input type="text" name="url" id="url"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-sky-500 focus:border-sky-500 sm:text-sm">
                    </div>

                    <div class="col-span-12 sm:col-span-6">
                        <label for="company" class="block text-sm font-medium text-gray-700">
                            Meta Thumbnail
                        </label>
                        <input type="text" name="company" id="company" autocomplete="organization"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-sky-500 focus:border-sky-500 sm:text-sm">
                    </div>
                    <div class="col-span-12">
                        <label for="company" class="block text-sm font-medium text-gray-700">
                            Video
                        </label>
                        <input type="text" name="company" id="company" autocomplete="organization"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-sky-500 focus:border-sky-500 sm:text-sm">
                    </div>
                    <div class="col-span-12">
                        <label for="about" class="block text-sm font-medium text-gray-700">
                            Body
                        </label>
                        <div class="mt-1">
                            <textarea id="about" name="about" rows="10"
                                class="shadow-sm focus:ring-sky-500 focus:border-sky-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">
                                        </textarea>
                        </div>
                        <p class="mt-2 text-sm text-gray-500">
                            Brief description for your profile. URLs are hyperlinked.
                        </p>
                    </div>
                    <fieldset class="col-span-12 sm:flex flex-wrap">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="pr-4">
                                <div class="relative flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="candidates" aria-describedby="candidates-description"
                                            name="candidates" type="checkbox"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="candidates" class="font-medium text-gray-700">New
                                            candidates</label>
                                        <span id="candidates-description" class="text-gray-500"><span
                                                class="sr-only">New candidates </span>who apply for any open
                                            postings.</span>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </fieldset>
                    <div class="col-span-6 sm:col-span-6">
                        <x-label for="tags" value="{{ __('Tags') }}" />
                        <x-input.select2 multiple>
                            @foreach ($this->tags() as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </x-input.select2>
                        <x-input-error for="tags" class="mt-2" />
                    </div>
                </div>
            </div>

            <!-- Privacy section -->
            <div class="pt-6 divide-y divide-gray-200">
                <div class="px-4 sm:px-6">
                    <div>
                        <h2 class="text-lg leading-6 font-medium text-gray-900">Privacy</h2>
                        <p class="mt-1 text-sm text-gray-500">
                            Ornare eu a volutpat eget vulputate. Fringilla commodo amet.
                        </p>
                    </div>
                    <ul class="mt-2 divide-y divide-gray-200">
                        <li class="py-4 flex items-center justify-between">
                            <div class="flex flex-col">
                                <p class="text-sm font-medium text-gray-900" id="privacy-option-1-label">
                                    Available to hire
                                </p>
                                <p class="text-sm text-gray-500" id="privacy-option-1-description">
                                    Nulla amet tempus sit accumsan. Aliquet turpis sed sit lacinia.
                                </p>
                            </div>
                            <!-- Enabled: "bg-teal-500", Not Enabled: "bg-gray-200" -->
                            <button type="button"
                                class="bg-gray-200 ml-4 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500"
                                role="switch" aria-checked="true" aria-labelledby="privacy-option-1-label"
                                aria-describedby="privacy-option-1-description">
                                <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                                <span aria-hidden="true"
                                    class="translate-x-0 inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"></span>
                            </button>
                        </li>
                        <li class="py-4 flex items-center justify-between">
                            <div class="flex flex-col">
                                <p class="text-sm font-medium text-gray-900" id="privacy-option-2-label">
                                    Make account private
                                </p>
                                <p class="text-sm text-gray-500" id="privacy-option-2-description">
                                    Pharetra morbi dui mi mattis tellus sollicitudin cursus pharetra.
                                </p>
                            </div>
                            <!-- Enabled: "bg-teal-500", Not Enabled: "bg-gray-200" -->
                            <button type="button"
                                class="bg-gray-200 ml-4 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500"
                                role="switch" aria-checked="false" aria-labelledby="privacy-option-2-label"
                                aria-describedby="privacy-option-2-description">
                                <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                                <span aria-hidden="true"
                                    class="translate-x-0 inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"></span>
                            </button>
                        </li>
                        <li class="py-4 flex items-center justify-between">
                            <div class="flex flex-col">
                                <p class="text-sm font-medium text-gray-900" id="privacy-option-3-label">
                                    Allow commenting
                                </p>
                                <p class="text-sm text-gray-500" id="privacy-option-3-description">
                                    Integer amet, nunc hendrerit adipiscing nam. Elementum ame
                                </p>
                            </div>
                            <!-- Enabled: "bg-teal-500", Not Enabled: "bg-gray-200" -->
                            <button type="button"
                                class="bg-gray-200 ml-4 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500"
                                role="switch" aria-checked="true" aria-labelledby="privacy-option-3-label"
                                aria-describedby="privacy-option-3-description">
                                <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                                <span aria-hidden="true"
                                    class="translate-x-0 inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"></span>
                            </button>
                        </li>
                        <li class="py-4 flex items-center justify-between">
                            <div class="flex flex-col">
                                <p class="text-sm font-medium text-gray-900" id="privacy-option-4-label">
                                    Allow mentions
                                </p>
                                <p class="text-sm text-gray-500" id="privacy-option-4-description">
                                    Adipiscing est venenatis enim molestie commodo eu gravid
                                </p>
                            </div>
                            <!-- Enabled: "bg-teal-500", Not Enabled: "bg-gray-200" -->
                            <button type="button"
                                class="bg-gray-200 ml-4 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500"
                                role="switch" aria-checked="true" aria-labelledby="privacy-option-4-label"
                                aria-describedby="privacy-option-4-description">
                                <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                                <span aria-hidden="true"
                                    class="translate-x-0 inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"></span>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="mt-4 py-4 px-4 flex justify-end sm:px-6">
                    <button type="button"
                        class="bg-white border border-gray-300 rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                        Cancel
                    </button>
                    <button type="submit"
                        class="ml-5 bg-sky-700 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-sky-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
