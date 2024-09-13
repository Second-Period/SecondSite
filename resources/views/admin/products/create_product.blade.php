<x-app-layout>
    <x-slot name="header">
        <h2 class="title">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <header>
                        <h2 class="subtitle">
                            {{ __('Create Product') }}
                        </h2>

                        <p class="paragraphy">
                            {{ __("Create a new product") }}
                        </p>

                        <form action="{{ route('products.create')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required autofocus autocomplete="name" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            <div>
                                <x-input-label for="name" :value="__('Price')" />
                                <x-text-input id="price" name="price" type="text" class="mt-1 block w-full" required autofocus autocomplete="price" />
                                <x-input-error class="mt-2" :messages="$errors->get('price')" />
                            </div>

                            <div>
                                <x-input-label for="name" :value="__('Image')" />
                                <x-text-input id="product_img" name="product_img" type="file" class="mt-1 block w-full" required autofocus autocomplete="product_img" />
                                <x-input-error class="mt-2" :messages="$errors->get('product_img')" />
                            </div>

                            <div class="flex mt-3 items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>
                            </div>
                        </form>
                    </header>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>