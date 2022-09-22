<x-layouts.app
   title='Home'
   meta-description='Home meta description'
>
   {{-- <h1 class="">Inicio</h1> --}}

   <div class="bg-green-kmline h-3"></div>
   <section class="header">
      <img src="{{ asset('img/inicio-1500.png') }}" width="100%">
   </section>
   <section>
      <h1 class="font-mono font-semibold text-gray-600 text-center text-4xl py-10">Sobre Nosotros</h1>
      <div class="lg:container mx-auto md:flex gap-5 md:w-full p-3 items-center">
         <div class="left w-5/6 md:w-1/2 mx-auto">
            <div class="card text-center 2xl:w-5/6 mx-auto xl:w-4/5">
               <img src="{{ asset('img/logotipo-trans.png') }}" width="100%">
            </div>
         </div>
         <div class="right w-5/6 md:w-1/2 text-center mx-auto">
            <p class="text-justify">En KAM SAL usted encontrará a su aliado más
            honesto. Trabajando de la mano con nuestros
            clientes para proporcionarles información en
            tiempo y oportuna para su toma de decisiones.
            Contamos con una de las plataformas
            informativas más evolucionadas en el sector</p>
         </div>
      </div>
      <div class="lg:container mx-auto md:flex gap-5 md:w-full p-3 items-center">
         <div class="left w-5/6 md:w-1/2 mx-auto">
            <h2 class="text-center text-2xl py-10 font-semibold">Tu aliado mas honesto en toda la Republica Mexicana</h2>
            <p class="text-justify">En KAM SAL usted encontrará a su
               aliado más honesto. Trabajando de
               la mano con nuestros clientes para
               proporcionarles información en
               tiempo y oportuna para su toma de
               decisiones. Contamos con una de</p>
         </div>
         <div class="right w-5/6 md:w-1/2 text-center mx-auto">
            <div class="card text-center 2xl:w-5/6 mx-auto xl:w-4/5">
               <img src="{{ asset('img/mapa.png') }}" width="100%">
            </div>
         </div>
      </div>
   </section>
   <section>
      <div class="bg-green-km h-2 w-5/6 mx-auto"></div>
      <h1 class="font-mono font-semibold text-gray-600 text-center text-4xl py-10">Nuestras Divisiones</h1>
      <div class="lg:container mx-auto md:flex gap-5 md:w-full p-3 items-center">
         <div class="left w-5/6 md:w-1/2 mx-auto">
            <div class="card text-center 2xl:w-5/6 mx-auto xl:w-4/5">
               <img src="{{ asset('img/kamsal-service.png') }}" width="100%">
            </div>
         </div>
         <div class="right w-5/6 md:w-1/2 text-center mx-auto">
            <p class="text-justify">- KAM SAL Especialistas en Servicio Automotriz
S.A. de C.V. Constituida en marzo del 2016 en
la ciudad de Orizaba, Veracruz.
Somos especialistas en mantenimiento
automotriz, realizamos todos los trabajos que</p>
         </div>
      </div>
      <div class="lg:container mx-auto md:flex gap-5 md:w-full p-3 items-center">
         <div class="left w-5/6 md:w-1/2 mx-auto">
            <img src="{{ asset('img/kamsal-fletes.png') }}" width="100%">

         </div>
         <div class="right w-5/6 md:w-1/2 text-center mx-auto">
            <div class="card text-center 2xl:w-5/6 mx-auto xl:w-4/5">
            <p class="text-justify">- La división FLEET SERVICE nace en el 2019
de la misma necesidad de nuestros clientes, al
tener unidades circulando por todo el país y
solicitarnos atención en diversos puntos del
mismo. Así es como creamos la división de</p>
            </div>
         </div>
      </div>
   </section>
</x-layouts.app>