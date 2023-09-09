<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Editer {{ $post->title }}
        </h2>
    </x-slot>

    <div class="text-gray-900 pt-12 pr-0 pb-14 pl-0 bg-white">


        <div class="my-5">


            @foreach ($errors->all() as $error)
                <span class="block text-red-500">
                    {{ $error }}

                </span>
            @endforeach
        </div>

        <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data"
            class="mt-10 mx-5">

            @method('put')
            @csrf
            <x-input-label for="title" value="Nom du post" />

            <x-text-input id="title" name="title" value="{{ $post->title }}" />



            <x-input-label for="content" value="Contenu du post" />

            <textarea name="content" id="content" cols="30" rows="10"
                class="mt-1 px-1 py-1 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block  rounded-md sm:text-sm focus:ring-1 ">
            
                {{ $post->content }}
            </textarea>


            <x-input-label for="image" value="Image du post" />

            <x-text-input id="image" type="file" name="image" value="" />


            <x-input-label for="category" value="categorie du post" />

            <select name="category" id="category">

                @foreach ($categories as $category)
                    <option value="{{ $category->id }} " {{ $post->category_id === $category->id ? 'selected' : '' }}>
                        {{ $category->name }}</option>
                @endforeach
            </select>

            <x-primary-button style="display: block !important" class="mt-5">

                Modifier le post

            </x-primary-button>





        </form>

    </div>

</x-app-layout>
