<nav class="bg-gray-900 text-white p-4">
    <div class="container mx-auto">
        <button class="md:hidden text-white" type="button" aria-label="Toggle navigation" @click="isOpen = !isOpen">
            <!-- Ícone para o menu responsivo -->
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <div class="hidden md:flex md:items-center md:space-x-4 justify-between" id="navbarSupportedContent">
            <ul class="flex space-x-4">
                <li>
                    <a class="text-sm text-white hover:text-gray-400 whitespace-nowrap" href="#">Field Multimarcas</a>
                </li>
                <li>
                    <a class="text-sm text-white hover:text-gray-400 whitespace-nowrap" href="{{route('cadastro')}}" :active="request()->routeIs('cadastro')">Criar uma conta</a>
                </li>
                <li>
                    <a class="text-sm text-white hover:text-gray-400" href="https://www.instagram.com/stories/highlights/18054277513454234/">Produtos</a>
                </li>
                <li>
                    <a class="text-sm text-white hover:text-gray-400" href="https://www.instagram.com/fieldmultimarcas/?igshid=OGQ5ZDc2ODk2ZA%3D%3D">Instagram</a>
                </li>
                <li>
                    <a class="text-sm text-white hover:text-gray-400" href="{{route('about')}}" :active="request()->routeIs('about')">Sobre</a>
                </li>
                <li>
                    <button @click="offcanvasOpen = true"  class="text-sm text-white hover:text-gray-400">
                       Carrinho
                    </button>
                </li>
            </ul>
            @if (Auth::check()) 
                <div class="dropdown">
                    <button class="btn m-1 bg-gray-800 border-gray-800 text-white hover:text-gray-600" type="button">
                        {{ Auth::user()->name }}
                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                    <ul class="menu dropdown-content rounded-box z-[1] w-52 p-2 shadow bg-gray-900">
                        <x-dropdown-link class="text-white hover:rounded hover:bg-gray-600" :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
            
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
            
                            <x-dropdown-link class="text-white hover:rounded hover:bg-gray-600" :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </ul>
                </div>
            @endif
        </div>
    </div>
</nav>


