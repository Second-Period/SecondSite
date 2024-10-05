<nav class="bg-gray-900 text-white p-4">
    <div class="container mx-auto">
        <button class="md:hidden text-white" type="button" aria-label="Toggle navigation" @click="isOpen = !isOpen">
            <!-- Ícone para o menu responsivo -->
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <div class="hidden md:flex md:items-center md:space-x-4" id="navbarSupportedContent">
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
                    <a class="text-sm text-white hover:text-gray-400" href="./pages/carrinho.html">
                       Carrinho
                    </a>
                </li>
            </ul>
            <div class=' flex justify-end w-full md:w-1/2'>
                <form class="ml-auto flex justify-end items-center gap-2">
                    <input class="rounded-lg px-3 py-1 bg-gray-700 border-none text-white placeholder-gray-300 focus:ring focus:ring-indigo-500" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    <x-button>Pesquisar</x-button>
                </form>
            </div>
        </div>
    </div>
</nav>