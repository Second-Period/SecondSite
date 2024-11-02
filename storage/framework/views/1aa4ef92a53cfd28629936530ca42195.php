

<?php $__env->startSection('content'); ?>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">Login</h2>

            <form action="<?php echo e(route('authUser')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <!-- Email Field -->
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                    <input type="email" id="email" name="email" class="w-full p-3 rounded border border-gray-300 focus:outline-none focus:ring focus:border-blue-500" placeholder="Digite seu email" required>
                </div>
                <!-- Password Field -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-bold mb-2">Senha:</label>
                    <input type="password" id="password" name="password" class="w-full p-3 rounded border border-gray-300 focus:outline-none focus:ring focus:border-blue-500" placeholder="Digite sua senha" required>
                </div>
                <!-- Submit Button -->
                <div class="mb-2">
                    Não possui conta?<a class="ml-1 hover:text-blue-400 hover:cursor-pointer" href="<?php echo e(route('cadastro')); ?>">Acesse aqui</a>
                </div>
                <div class="mb-6">
                    <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded hover:bg-blue-600 transition duration-300">Entrar</button>
                </div>
            </form>
        </div>
    </div> 
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Desktop\SecondSite\resources\views/page/auth/loginUser.blade.php ENDPATH**/ ?>