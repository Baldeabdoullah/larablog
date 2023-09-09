<x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Blog') }}
        </h2>
    </x-slot>


    <div class="text-gray-900 pt-12 pr-0 pb-14 pl-0 bg-white">
        <div
            class="w-full pt-4 pr-5 pb-6 pl-5 mt-0 mr-auto mb-0 ml-auto space-y-5 sm:py-8 md:py-12 sm:space-y-8 md:space-y-16
      max-w-7xl">
            @include('partials.entete')
            <div class="grid grid-cols-12 sm:px-5 gap-x-8 gap-y-16">


                @foreach ($posts as $post)
                    <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                        <img src="{{ asset('/storage/' . $post->image) }}"
                            class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56 btn-" />
                        <p
                            class="bg-green-500 flex items-center leading-none text-sm font-medium text-gray-50 pt-1.5 pr-3 pb-1.5 pl-3 rounded-full uppercase ">
                            {{ $post->category->name }}</p>
                        <a class="text-lg font-bold sm:text-xl md:text-2xl">{{ $post->title }}</a>
                        <p class="text-sm text-black">

                            {{ Str::limit($post->content, 75) }}
                        </p>
                        <div class="pt-2 pr-0 pb-0 pl-0">
                            <a
                                class="inline text-xs font-medium mt-0 mr-1 mb-0 ml-0 underline">{{ $post->user->name }}</a>
                            <p class="inline text-xs font-medium mt-0 mr-1 mb-0 ml-1">·
                                {{ $post->created_at->format('d M Y') }} ·</p>
                            <a class="inline text-xs font-medium mt-0 mr-1 mb-0 ml-1"
                                href="{{ route('posts.show', $post) }}">Voir plus</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        @include('partials.footer')
    </div>






</x-app-layout>
