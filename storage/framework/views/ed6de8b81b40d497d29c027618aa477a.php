<nav class="bg-gray-900 text-white p-4">
    <div class="container mx-auto">
        <button class="md:hidden text-white" type="button" aria-label="Toggle navigation" @click="isOpen = !isOpen">
            <!-- Ícone para o menu responsivo -->
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <div class="hidden md:flex md:items-center md:space-x-4 justify-between" id="navbarSupportedContent">
            <ul class="flex space-x-4">
                <li>
                    <a class="text-sm text-white hover:text-gray-400 whitespace-nowrap" href="#">Field Multimarcas</a>
                </li>
                <li>
                    <a class="text-sm text-white hover:text-gray-400 whitespace-nowrap" href="<?php echo e(route('cadastro')); ?>" :active="request()->routeIs('cadastro')">Criar uma conta</a>
                </li>
                <li>
                    <a class="text-sm text-white hover:text-gray-400" href="https://www.instagram.com/stories/highlights/18054277513454234/">Produtos</a>
                </li>
                <li>
                    <a class="text-sm text-white hover:text-gray-400" href="https://www.instagram.com/fieldmultimarcas/?igshid=OGQ5ZDc2ODk2ZA%3D%3D">Instagram</a>
                </li>
                <li>
                    <a class="text-sm text-white hover:text-gray-400" href="<?php echo e(route('about')); ?>" :active="request()->routeIs('about')">Sobre</a>
                </li>
                <li>
                    <a class="text-sm text-white hover:text-gray-400" href="carrinho.js">
                       Carrinho
                    </a>
                </li>
            </ul>
            <?php if(Auth::check()): ?> 
                <div class="dropdown">
                    <button class="btn m-1 bg-gray-800 border-gray-800 text-white hover:text-gray-600" type="button">
                        <?php echo e(Auth::user()->name); ?>

                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                    <ul class="menu dropdown-content rounded-box z-[1] w-52 p-2 shadow bg-gray-900">
                        <?php if (isset($component)) { $__componentOriginal68cb1971a2b92c9735f83359058f7108 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68cb1971a2b92c9735f83359058f7108 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['class' => 'text-white hover:rounded hover:bg-gray-600','href' => route('profile.edit')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-white hover:rounded hover:bg-gray-600','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('profile.edit'))]); ?>
                            <?php echo e(__('Profile')); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $attributes = $__attributesOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__attributesOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $component = $__componentOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__componentOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
            
                        <!-- Authentication -->
                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
            
                            <?php if (isset($component)) { $__componentOriginal68cb1971a2b92c9735f83359058f7108 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68cb1971a2b92c9735f83359058f7108 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['class' => 'text-white hover:rounded hover:bg-gray-600','href' => route('logout'),'onclick' => 'event.preventDefault();
                                                this.closest(\'form\').submit();']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-white hover:rounded hover:bg-gray-600','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('logout')),'onclick' => 'event.preventDefault();
                                                this.closest(\'form\').submit();']); ?>
                                <?php echo e(__('Log Out')); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $attributes = $__attributesOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__attributesOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $component = $__componentOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__componentOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
                        </form>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
</nav>


<?php /**PATH C:\Users\Usuario\Desktop\SecondSite\resources\views/partials/navbar.blade.php ENDPATH**/ ?>