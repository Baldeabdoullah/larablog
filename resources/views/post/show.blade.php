<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $post->title }}
        </h2>
    </x-slot>

    <div class="text-gray-900 pt-12 pr-0 pb-14 pl-0 bg-white">


        <div class="flex flex-col items-center sm:px-5 md:flex-row">
            <div
                class="flex flex-col items-start justify-center w-full h-full pt-6 pr-0 pb-6 pl-0 mb-6 md:mb-0 md:w-1/2">
                <div
                    class="flex flex-col items-start justify-center h-full space-y-3 transform md:pr-10 lg:pr-16
            md:space-y-5">
                    <div
                        class="bg-green-500 flex items-center leading-none rounded-full text-gray-50 pt-1.5 pr-3 pb-1.5 pl-2 uppercase inline-block">
                        <p class="inline">
                            <svg class="w-3.5 h-3.5 mr-1" fill="currentColor" viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0
                  00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755
                  1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1
                  0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </p>
                        <p class="inline text-xs font-medium">New</p>
                    </div>
                    <a class="text-4xl font-bold leading-none lg:text-5xl xl:text-6xl"> {{ $post->title }}
                        .</a>
                    <div class="pt-2 pr-0 pb-0 pl-0">
                        <p class="text-sm font-medium inline">author:</p>
                        <a class="inline text-sm font-medium mt-0 mr-1 mb-0 ml-1 underline">{{ $post->user->name }}</a>
                        <p class="inline text-sm font-medium mt-0 mr-1 mb-0 ml-1">· 23rd, April 2021 ·</p>
                        <p class=" text-sm font-medium inline mt-0 mr-1 mb-0 ml-1">{{ $post->content }}</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2">
                <div class="block">
                    <img src="{{ asset('/storage/' . $post->image) }}"
                        class="object-cover rounded-lg max-h-64 sm:max-h-96 btn- w-full h-full" />
                </div>
            </div>
        </div>



    </div>

</x-app-layout>
