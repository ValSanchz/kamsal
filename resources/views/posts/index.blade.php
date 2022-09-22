<x-layouts.app
   title='Galery'
   meta-description='Galery meta description'
>
   <header class="px-6 py-4 space-y-2 text-center">
      <h1 class="font-mono font-semibold text-gray-600 text-center text-4xl py-10">Galeria</h1>
      @auth
         <a class="inline-flex items-center px-4 py-2 text-xs focus:border-sky-900 focus:shadow-outline-sky" href="{{ route('posts.create') }}">Crear Post</a>
      @endauth
   </header>


   @foreach($posts as $post)
   <div >
      <h2>
         <a class="" href="{{ route('posts.show', $post) }}">
            {{ $post['title'] }}
         </a>
      </h2>
      @auth
         <a href="{{ route('posts.edit', $post) }}">Edit</a>
         <form action="{{ route('posts.destroy', $post) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
         </form>
      @endauth
   </div>

   @endforeach
</x-layouts.app>