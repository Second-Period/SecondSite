@extends('index')

@section('content')

    <div x-data="{ offcanvasOpen: false, itens: [] }" class="relative">

        @include('partials.navbar')
        
        <!-- Offcanvas -->
        <div 
            x-show="offcanvasOpen"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform -translate-x-full"
            x-transition:enter-end="opacity-100 transform translate-x-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform translate-x-0"
            x-transition:leave-end="opacity-0 transform -translate-x-full"
            class="fixed inset-y-0 left-0 bg-white w-80 max-w-full shadow-lg z-50 overflow-y-auto"
            @click.away="offcanvasOpen = false" 
            style="display: none;" 
        >
            <!-- Offcanvas Header -->
            <div class="flex items-center justify-between p-4 border-b border-gray-300">
                <h5 class="text-lg font-semibold">Carrinho</h5>
                <button 
                    @click="offcanvasOpen = false" 
                    class="text-gray-500 hover:text-gray-700 focus:outline-none"
                    aria-label="Close"
                >
                    <!-- Ícone de fechar (x) -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Offcanvas Body -->
            <div class="p-4 space-y-4">
                <div class="itens-carrinho">
                    <!-- Mensagem de carrinho vazio -->
                    <div class="mensagem-vazio flex flex-col items-center justify-center h-96 border-b border-gray-300">
                        <p class="text-gray-500 text-lg font-semibold"></p>
                    </div>
                    <!-- Itens do carrinho vão aqui -->
                </div>
                <div class="flex item-center">
                    <button  id="btn-comprar" class="bg-green-500 text-white w-full py-2 mt-4 rounded-md hover:bg-green-600 pr-4">
                        Comprar
                    </button>
                </div>
               
            </div>
        </div>
    </div>

    <div class="container mx-auto">
        @include('partials.carousel')    
       <div class="p-4 border rounded mx-3">
            <div class="text-lg border-b-2 border-slate-300 mb-2 pb-2 text-center"> Produtos</div>

            <div class="grid grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5">
                @foreach ($products as $product)
                    <div class="mt-2 card w-18 rounded-lg border border-gray-600">
                        <img src="{{ asset($product->product_img) }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="mb-0">{{ $product->price }}</p>
                            <button @click ="itens.push('{{ $product->name }}')" class="add-ao-carrinho hover:bg-blue-600 text-white px-3 py-1 rounded-lg" data-name="{{ $product->name }}">Adicionar</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div> 
    </div>    

@endsection
