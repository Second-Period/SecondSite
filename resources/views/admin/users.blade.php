<x-app-layout>
    <x-slot name="header">
        <h2 class="title">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   {{ __('Lista de Usuários')}} 
                </div>
            </div>
            <div class="mt-2 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg overflow-x-auto">
                <table>
                    <thead>
                        <tr class="divide-x divide-gray-600 sm:overflow-x-auto">
                            <th>ID</th>
                            <th>{{__('Username')}}</th>
                            <th>{{__('Email')}}</th>
                            <th>{{__('Admin')}}</th>
                            <th>{{__('Created at')}}</th>
                            <th>{{__('Updated at')}}</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-800 divide-y divide-gray-600">
                        @foreach ($users as $user)
                            <tr class="divide-x divide-gray-600">
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{$user->is_staff}}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>{{ $user->updated_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>