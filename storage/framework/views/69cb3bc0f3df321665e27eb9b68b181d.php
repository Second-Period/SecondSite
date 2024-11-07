

<?php $__env->startSection('content'); ?>

    <div x-data="{ offcanvasOpen: false }" class="relative">

        <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <!-- Offcanvas -->
        <div 
            x-show="offcanvasOpen"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform -translate-x-full"
            x-transition:enter-end="opacity-100 transform translate-x-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform translate-x-0"
            x-transition:leave-end="opacity-0 transform -translate-x-full"
            class="fixed inset-y-0 left-0 bg-white w-80 max-w-full shadow-lg z-50 overflow-y-auto"
            @click.away="offcanvasOpen = false" 
            style="display: none;" 
        >
            <!-- Offcanvas Header -->
            <div class="flex items-center justify-between p-4 border-b border-gray-300">
                <h5 class="text-lg font-semibold">Carrinho</h5>
                <button 
                    @click="offcanvasOpen = false" 
                    class="text-gray-500 hover:text-gray-700 focus:outline-none"
                    aria-label="Close"
                >
                    <!-- Ícone de fechar (x) -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Offcanvas Body -->
            <div class="p-4 space-y-4">
                <div class="itens-carrinho">
                    <!-- Mensagem de carrinho vazio -->
                    <div class="mensagem-vazio flex flex-col items-center justify-center h-96 border-b border-gray-300">
                        <p class="text-gray-500 text-lg font-semibold">NENHUM ITEM NO CARRINHO</p>
                    </div>
                    <!-- Itens do carrinho vão aqui -->
                </div>
                <button id="btn-comprar" class="bg-green-500 text-white w-full py-2 mt-4 rounded-md hover:bg-green-600">
                    Comprar
                </button>
            </div>
        </div>
    </div>

    <div class="container mx-auto">
        <?php echo $__env->make('partials.carousel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>    
       <div class="p-4 border rounded mx-3">
            <div class="text-lg border-b-2 border-slate-300 mb-2 pb-2 text-center"> Produtos</div>

            <div class="grid grid-cols-5 gap-5">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="mt-2 card w-18 rounded-lg border border-gray-600">
                        <img src="<?php echo e(asset($product->product_img)); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($product->name); ?></h5>
                            <p class="mb-0"><?php echo e($product->price); ?></p>
                            <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['class' => 'add-ao-carrinho','dataName' => ''.e($product->name).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'add-ao-carrinho','data-name' => ''.e($product->name).'']); ?>Adicionar <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $attributes = $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $component = $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div> 
    </div>    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Desktop\SecondSite\resources\views/page/products/products.blade.php ENDPATH**/ ?>