<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   {{ __('Lista de Usuários')}} 
                </div>
            </div>
            <div class="mt-2 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg overflow-x-auto">
                <table class="roudend-lg table-auto mx-auto divide-y divide-gray-700 min-w-full">
                    <thead>
                        <tr class="divide-x divide-gray-600 sm:overflow-x-auto">
                            <th class="p-4 text-md text-center text-gray-100 tracking-normal">ID</th>
                            <th class="p-4 text-md text-center text-gray-100 tracking-normal">{{__('Username')}}</th>
                            <th class="p-4 text-md text-center text-gray-100 tracking-normal">{{__('Email')}}</th>
                            <th class="p-4 text-md text-center text-gray-100 tracking-normal">{{__('Admin')}}</th>
                            <th class="p-4 text-md text-center text-gray-100 tracking-normal">{{__('Created at')}}</th>
                            <th class="p-4 text-md text-center text-gray-100 tracking-normal">{{__('Updated at')}}</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-800 divide-y divide-gray-600">
                        @foreach ($users as $user)
                            <tr class="divide-x divide-gray-600">
                                <td class="p-2 text-md text-center text-gray-100 tracking-normal">{{ $user->id }}</td>
                                <td class="p-2 text-md text-center text-gray-100 tracking-normal">{{ $user->name }}</td>
                                <td class="p-2 text-md text-center text-gray-100 tracking-normal">{{ $user->email }}</td>
                                <td class="p-2 text-md text-center text-gray-100 tracking-normal">{{$user->is_staff}}</td>
                                <td class="p-2 text-md text-center text-gray-100 tracking-normal">{{ $user->created_at }}</td>
                                <td class="p-2 text-md text-center text-gray-100 tracking-normal">{{ $user->updated_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>