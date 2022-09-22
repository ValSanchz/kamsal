<x-layouts.app
	:title="$post->title">
<h1>Formulario de Edicion</h1>
<form action="{{ route('posts.update', $post) }}" method="POST">
	@csrf @method('PATCH')
	@include('posts.form')
	<button type="submit">Enviar</button>
</form>
<a href="{{ route('posts.index') }}">Regresar</a>
</x-layouts.app>