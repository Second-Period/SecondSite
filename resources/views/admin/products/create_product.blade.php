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
                            {{ __('Create Product') }}
                        </h2>

                        <p class="mt-1 mb-1 text-sm text-gray-600 dark:text-gray-400">
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