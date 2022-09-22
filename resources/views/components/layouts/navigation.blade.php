<nav class="bg-green-km flex justify-between lg:justify-start items-center">
    <div class="logo p-2 w-1/6">
        <img src="{{ asset('img/logo-w.png') }}" width="100%" alt="logo-kamsal">
    </div>
    <div class="links lg:block hidden w-1/6 md:w-4/6">
        <ul class="menu flex items-center justify-center gap-5">
            <li>
                <!-- Active: 'text-sky-600 dark:text-white', Inactive 'text-slate-400' -->
                <a href="{{ route('home') }}"
                        class="link">
                        Inicio
                </a>
            </li>
            <li>
                                <!-- Active: 'text-sky-600 dark:text-white', Inactive 'text-slate-400' -->
                <a href="{{ route('division') }}"
                        class="link">
                        Division
                </a>
            </li>
                            <!-- Active: 'text-sky-600 dark:text-white', Inactive 'text-slate-400' -->
            <li>
                <a href="{{ route('about') }}"
                        class="link">
                        ¿Quienes Somos?
                </a>
            </li>
            <li>
                                <!-- Active: 'text-sky-600 dark:text-white', Inactive 'text-slate-400' -->
                <a href="{{ route('galery') }}"
                        class="link">
                        Galeria
                </a>
            </li>
            <li>
            <!-- Active: 'text-sky-600 dark:text-white', Inactive 'text-slate-400' -->
                <a href="{{ route('contact') }}"
                        class="link">
                        Contacto
                </a>
            </li>

                <li>
                    <a href="{{ route('register') }}"
                        class="rounded-full bg-green-kmline text-white font-bold px-4 py-2 hover: text-black hover:bg-white transition duration-300">
                        Registro
                    </a>
                </li>
            @auth
                <li>
                    <a href="{{ route('login') }}"
                        class="my-4 inline-block rounded-full bg-green-kmline text-white font-bold px-4 py-2 hover: text-black hover:bg-white transition duration-300">
                        Login
                    </a>
                </li>
                @else
                <a class="hidden" href="#">Logout</a>
            @endauth



        </ul>
    </div>
    {{-- Menu Responsive --}}
    <div class="block lg:hidden w-1/6 lg:w-4/6">
        <a href="#" class="link" id="mobile-menu">Menu</a>
        <ul class="mobile-links hidden w-full absolute z-50 left-0 text-center bg-gray-800">
            <li>
                <!-- Active: 'text-sky-600 dark:text-white', Inactive 'text-slate-400' -->
                <a href="{{ route('home') }}"
                        class="link">
                        Inicio
                </a>
            </li>
            <li>
                                <!-- Active: 'text-sky-600 dark:text-white', Inactive 'text-slate-400' -->
                <a href="{{ route('division') }}"
                        class="link">
                        Division
                </a>
            </li>
                            <!-- Active: 'text-sky-600 dark:text-white', Inactive 'text-slate-400' -->
            <li>
                <a href="{{ route('about') }}"
                        class="link">
                        ¿Quienes Somos?
                </a>
            </li>
            <li>
                                <!-- Active: 'text-sky-600 dark:text-white', Inactive 'text-slate-400' -->
                <a href="{{ route('posts.index') }}"
                        class="link">
                        Galeria
                </a>
            </li>
            <li>
            <!-- Active: 'text-sky-600 dark:text-white', Inactive 'text-slate-400' -->
                <a href="{{ route('contact') }}"
                        class="link">
                        Contacto
                </a>
            </li>
                <li>
                    <a href="{{ route('register') }}"
                        class="my-4 inline-block rounded-full bg-green-kmline text-white font-bold px-4 py-2 hover: text-black hover:bg-white transition duration-300">
                        Registro
                    </a>
                </li>
                @auth
                    <li>
                        <a href="{{ route('login') }}"
                            class="my-4 inline-block rounded-full bg-green-kmline text-white font-bold px-4 py-2 hover: text-black hover:bg-white transition duration-300">
                            Login
                        </a>
                    </li>

                    <li><a class="hidden" href="#">Logout</a></li>
                @endauth

        </ul>

        {{-- scripts --}}
        <script>
            const menuButton = document.querySelector('#mobile-menu');

            menuButton.addEventListener('click', e => {
                const menu = document.querySelector('.mobile-links');

                menu.classList.toggle('hidden');
            });
        </script>
    </div>
</nav>