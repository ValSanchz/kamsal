<x-layouts.app
   title='Contacto'
   meta-description='Contacto meta description'
>
 <h1 class="font-mono font-semibold text-gray-600 text-center text-4xl py-10">Contacto</h1>
<div class="md:flex md:justify-center md:gap-10 md:items-center p-5">

  <form class="">
  @csrf
  <div class="mb-5">
   <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
          Nombre
        </label>
        <input id="nombre" type="nombre" name="nombre" placeholder="Nombre" class="border p-3 w-full rounded-lg @error('nombre') border-red-500
        @enderror"
        value="{{ old('nombre') }}">
        @error('email')
          <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">{{ $message }}</p>
        @enderror
  </div>

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
    <label for="subject" class="mb-2 block uppercase text-gray-500 font-bold">Asunto</label>
        <input class="border p-3 w-full rounded-lg @error('subject') border-red-500
        @enderror"
        id="subject" name="subject"
        placeholder="Asunto"
        value="{{ old('subject') }}">
  </div>

  <div class="mb-5">
        <label class="mb-2 block uppercase text-gray-500 font-bold" for="content">Mensaje</label>
        <textarea class="border p-3 w-full rounded-lg @error('content') border-red-500
        @enderror"
        id="content" name="content"
        placeholder="Mensaje...">
        {{ old('content') }}
      </textarea>
      @error('content')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>

  <input
        type="submit"
        value="Enviar"
        class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
</form>
</div>
</x-layouts.app>