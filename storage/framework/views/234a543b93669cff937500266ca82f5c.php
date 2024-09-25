<nav class="bg-gray-900 text-white p-4">
    <div class="container mx-auto">
        <button class="md:hidden text-white" type="button" aria-label="Toggle navigation" @click="isOpen = !isOpen">
            <!-- Ícone para o menu responsivo -->
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <div class="hidden md:flex md:items-center md:space-x-4" id="navbarSupportedContent">
            <ul class="flex space-x-4">
                <li>
                    <a class="text-sm text-white hover:text-gray-400 whitespace-nowrap" href="#">Field Multimarcas</a>
                </li>
                <li>
                    <a class="text-sm text-white hover:text-gray-400 whitespace-nowrap" href="./pages/cadastro.html">Criar uma conta</a>
                </li>
                <li>
                    <a class="text-sm text-white hover:text-gray-400" href="https://www.instagram.com/stories/highlights/18054277513454234/">Produtos</a>
                </li>
                <li>
                    <a class="text-sm text-white hover:text-gray-400" href="https://www.instagram.com/fieldmultimarcas/?igshid=OGQ5ZDc2ODk2ZA%3D%3D">Instagram</a>
                </li>
                <li>
                    <a class="text-sm text-white hover:text-gray-400" href="./pages/about.html">Sobre</a>
                </li>
                <li>
                    <a class="text-sm text-white hover:text-gray-400" href="./pages/carrinho.html">
                       Carrinho
                    </a>
                </li>
            </ul>
            <div class=' flex justify-end w-full md:w-1/2'>
                <form class="ml-auto flex justify-end items-center gap-2">
                    <input class="rounded-lg px-3 py-1 bg-gray-700 border-none text-white placeholder-gray-300 focus:ring focus:ring-indigo-500" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Pesquisar <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $attributes = $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $component = $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</nav><?php /**PATH C:\Users\Usuario\Desktop\pd2\resources\views/partials/navbar.blade.php ENDPATH**/ ?>