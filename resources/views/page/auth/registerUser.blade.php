@extends('index')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">cadastro</h2>
            
            <form action="{{ route('registerUser') }}" method="post">
                
                <!-- Nome -->
                <div class="mb-6">
                    <label for="nome" class="block text-gray-700 font-bold mb-2">Nome:</label>
                    <input type="nome" id="nome" name="nome" class="w-full p-3 rounded border border-gray-300 focus:outline-none focus:ring focus:border-blue-500" placeholder="Digite seu nome" required>
                </div>
                <!-- Email -->
                <div class="mb-6">
                    <label for="Email" class="block text-gray-700 font-bold mb-2">Email:</label>
                    <input type="email" id="email" name="email" class="w-full p-3 rounded border border-gray-300 focus:outline-none focus:ring focus:border-blue-500" placeholder="Digite seu email" required>
                </div>
                <!-- Senha -->
                <div class="mb-6">
                    <label for="senha" class="block text-gray-700 font-bold mb-2">Senha:</label>
                    <input type="senha" id="senha" name="senha" class="w-full p-3 rounded border border-gray-300 focus:outline-none focus:ring focus:border-blue-500" placeholder="Digite sua senha" required>
                </div>

                <div class="mb-2">
                    Já possui conta?<a class="ml-1 hover:text-blue-400 hover:cursor-pointer" href="{{route('loginUser')}}">Acesse aqui</a>
                </div>
                <!-- Cadastrar -->
                <div class="mb-6">
                    <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded hover:bg-blue-600 transition duration-300">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
@endsection