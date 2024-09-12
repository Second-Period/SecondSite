<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <header>
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            {{ __('Detail of Product') }}
                        </h2>

                        <p class="mt-1 mb-1 text-sm text-gray-600 dark:text-gray-400">
                            {{ __("Detail a product") }}
                        </p>

                        <form id="form-detail" action="{{ route('products.update', $product->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" name="name" type="text" :value="old('name', $product->name)" class="mt-1 block w-full" required autofocus autocomplete="name" readonly/>
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            <div>
                                <x-input-label for="price" :value="__('Price')" />
                                <x-text-input id="price" name="price" type="text" :value="old('price', $product->price)" class="mt-1 block w-full" required autofocus autocomplete="price" readonly/>
                                <x-input-error class="mt-2" :messages="$errors->get('price')" />
                            </div>

                            <div>
                                <x-input-label for="product_img" :value="__('Image')" />
                                <x-text-input id="product_img" name="product_img" x-bind:type="type" :value="old('product_img', $product->product_img)"  class="mt-1 block w-full" autofocus autocomplete="product_img" readonly/>
                                <x-input-error class="mt-2" :messages="$errors->get('product_img')" />
                            </div>

                            <div id="div" class="flex mt-3 items-center gap-4">
                                <x-secondary-button class="text-center px-7" id="edit">{{ __('Edit') }}</x-secundary-button>
                            
                            </div>
                        </form>
                        <form id="form-delete" class="mt-3" action="{{route('products.delete', $product->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <x-secondary-button type='click' id="del">{{ __('Delete') }}</x-secundary-button>
                        </form>
                    </header>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>