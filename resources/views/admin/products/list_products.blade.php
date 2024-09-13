<x-app-layout>
    <x-slot name="header">
        <h2 class="title">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('List of Products')}}
                    <x-secondary-button onclick="location.href='{{route('products.create')}}'" class="float-right">Add a new product</x-secundary-button>        
                </div>
            </div>
            <div class="mt-2 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg overflow-x-auto">
                <table>
                    <thead>
                        <tr class="divide-x divide-gray-600 sm:overflow-x-auto">
                            <th>ID</th>
                            <th>{{__('Product')}}</th>
                            <th>{{__('Price')}}</th>
                            <th>{{__('Created at')}}</th>
                            <th>{{__('Updated at')}}</th>
                           
                        </tr>
                    </thead>
                    <tbody class="bg-gray-800 divide-y divide-gray-600">
                        @foreach ($products as $product)
                            <tr class="divide-x divide-gray-600">
                                <td>{{ $product->id }}</td>
                                <td><a class="p-1 hover:bg-gray-500 hover:rounded-md" href="{{route('products.detail', $product->id)}}">{{ $product->name }}</a></td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->created_at }}</td>
                                @if ($product->created_at != $product->updated_at)
                                    <td>{{ $product->updated_at }}</td>
                                @else
                                    <td>Sem modificação</td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>