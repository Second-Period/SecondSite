@extends('index')

@section('content')
    
    <div class="container mx-auto">
        @include('partials.carousel')    
       <div class="p-4 border rounded mx-3">
            <div class="text-lg border-b-2 border-slate-300 mb-2 pb-2 text-center"> Produtos</div>

            <div class="grid grid-cols-5 gap-5">
                @foreach ($products as $product)
                    <div class="mt-2 card w-18 rounded-lg border border-gray-600">
                        <img src="{{ asset('storage/'. $product->product_img) }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="mb-0">{{ $product->price }}</p>
                            <x-button class=".add-ao-carrinho" data-name="{{ $product->name }}">Adicionar</x-button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div> 
    </div>    
@endsection
