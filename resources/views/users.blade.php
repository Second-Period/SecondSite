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
            <div class="mt-2 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <table class="mx-auto divide-y divide-gray-700">
                    <thead>
                        <tr class="flex justify-beetween gap-4">
                            <th class="sm:items-center">ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Data Criada</th>
                            <th>Data Atualizada</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-800 divide-y divide-y-700">
                        <td></td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>