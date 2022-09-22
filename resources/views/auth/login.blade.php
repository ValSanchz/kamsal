<x-layouts.app
   title='Login'
   meta-description='Contacto meta description'
>
  <h1 class="font-mono font-semibold text-gray-600 text-center text-4xl py-10">Inicio de Sesion</h1>
<div class="md:flex md:justify-center md:gap-10 md:items-center p-5">
  <form action="{{ route('login') }}" method="POST">
    @csrf

{{--     <div class="space-y-4">

      <label class="flex flex-col">
        <span class="font-serif text-slate-600">Email</span>
        <input class="rounded-md shadow-sm border-slate-300"
          type="email"
          name="email"
          value="{{ old('email') }}">
        @error('email')
       <small style="color: red">{{ $message }}</small>
        @enderror
      </label>

      <label class="flex flex-col">
        <span class="font-serif text-slate-600">Password</span>
        <input class="rounded-md shadow-sm border-slate-300"
          type="password"
          name="password">
        @error('password')
        <small style="color: red">{{ $message }}</small>
        @enderror
      </label>

      <label class="flex">
        <input class="rounded-md shadow-sm border-slate-300"
          type="checkbox"
          name="remember">
        <span class="font-serif text-slate-600">Recordar</span>
      </label>

    </div> --}}

    <div class="mb-5">
        <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
          Email
        </label>
        <input id="email" type="email" name="email" placeholder="Tu email" class="border p-3 w-full rounded-lg @error('email') border-red-500
        @enderror"
        value="{{ old('email') }}">
        @error('email')
          <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">{{ $message }}</p>
        @enderror
      </div>

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
        <input class="cursor-pointer" type="checkbox" name="remember">
        <label class="text-gray-500 text-sm">
          Mantener mi sesión abierta
        </label>
      </div>

    <input
        type="submit"
        value="Ingresar"
        class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">

    <a href="{{ route('register') }}">Registro</a>
  </form>
</div>

</x-layouts.app>