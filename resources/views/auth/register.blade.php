<x-layouts.app
   title='Registro'
   meta-description='Contacto meta description'
>
  <h1 class="font-mono font-semibold text-gray-600 text-center text-4xl py-10">Formulario de Registro</h1>
<div class="md:flex md:justify-center md:gap-10 md:items-center p-5">
  <form action="{{ route('register') }}" method="POST">
    @csrf

    <div class="mb-5">
      <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
          Nombre Completo
        </label>
        <input id="nombre" type="nombre" name="nombre" placeholder="Coloca tu nombre aqui" class="border p-3 w-full rounded-lg @error('nombre') border-red-500
        @enderror"
        value="{{ old('nombre') }}">
        @error('nombre')
          <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">{{ $message }}</p>
        @enderror

      <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
          Email
        </label>
        <input id="email" type="email" name="email" placeholder="Tu email" class="border p-3 w-full rounded-lg @error('email') border-red-500
        @enderror"
        value="{{ old('email') }}">
        @error('email')
          <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">{{ $message }}</p>
        @enderror

      <div class="mb-5">
        <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
          Password
        </label>
        <input
        id="password"
        type="password"
        name="password"
        placeholder="Tu Password"
        class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror">
        @error('password')
        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-5">
        <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
          Confirmar Password
        </label>
        <input
        id="password_confirmation"
        type="password"
        name="password_confirmation"
        placeholder="Confirma tu Password"
        class="border p-3 w-full rounded-lg @error('password_confirmation') border-red-500 @enderror">
        @error('password_confirmation')
        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
        @enderror
      </div>

    </div>

    <input
        type="submit"
        value="Enviar"
        class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">

    <a class="hidden" href="{{ route('login') }}">Login</a>
  </form>
<div></div>
</x-layouts.app>