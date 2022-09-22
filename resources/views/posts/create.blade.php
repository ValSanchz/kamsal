<x-layouts.app
	title="Crear nuevo post">
<h1>Create new post</h1>

<form action="{{ route('posts.store') }}" method="POST">
	@csrf
	@include('posts.form')
	<button type="submit">Enviar</button>
</form>

<a href="{{ route('posts.index') }}">Regresar</a>
</x-layouts.app>