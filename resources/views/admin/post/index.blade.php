<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                {{ session('success') }}
            @endif




            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                @foreach ($posts as $post)
                    <button class="rounded-full  bg-yellow-300 px-1 py-1 block my-2">
                        <a href="{{ route('admin.posts.edit', $post) }}">Editer
                            {{ $post->title }}
                        </a>
                    </button>

                    <button class="rounded-full  bg-orange-400 px-1 py-1 block my-2">
                        <a href="#"
                            onclick="event.preventDefault

                        document.getElementById('destroy-post-form').submit();
                        
                        ">supprimer
                            {{ $post->title }}

                            <form action="{{ route('admin.posts.destroy', $post) }}" method="post"
                                id="destroy-post-form">

                                @csrf
                                @method('delete')
                            </form>


                        </a>
                    </button>
                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>
