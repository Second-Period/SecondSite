<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                {{ __('List of Products')}} 
                </div>
            </div>
            <div class="mt-2 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg overflow-x-auto">
                <table class="roudend-lg table-auto mx-auto divide-y divide-gray-700 min-w-full">
                    <thead>
                        <tr class="divide-x divide-gray-600 sm:overflow-x-auto">
                            <th class="p-4 text-md text-center text-gray-100 tracking-normal">ID</th>
                            <th class="p-4 text-md text-center text-gray-100 tracking-normal">{{__('Product')}}</th>
                            <th class="p-4 text-md text-center text-gray-100 tracking-normal">{{__('Price')}}</th>
                            <th class="p-4 text-md text-center text-gray-100 tracking-normal">{{__('Created at')}}</th>
                            <th class="p-4 text-md text-center text-gray-100 tracking-normal">{{__('Updated at')}}</th>
                           
                        </tr>
                    </thead>
                    <tbody class="bg-gray-800 divide-y divide-gray-600">
                        @foreach ($products as $product)
                            <tr class="divide-x divide-gray-600">
                                <td class="p-2 text-md text-center text-gray-100 tracking-normal">{{ $product->id }}</td>
                                <td class="p-2 text-md text-center text-gray-100 tracking-normal" ><a class="p-1 hover:bg-gray-500 hover:rounded-md" href="{{route('products.detail', $product->id)}}">{{ $product->name }}</a></td>
                                <td class="p-2 text-md text-center text-gray-100 tracking-normal">{{ $product->price }}</td>
                                <td class="p-2 text-md text-center text-gray-100 tracking-normal">{{ $product->created_at }}</td>
                                @if ($product->created_at != $product->updated_at)
                                    <td class="p-2 text-md text-center text-gray-100 tracking-normal">{{ $product->updated_at }}</td>
                                @else
                                    <td class="p-2 text-md text-center text-gray-100 tracking-normal">Sem modificação</td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>