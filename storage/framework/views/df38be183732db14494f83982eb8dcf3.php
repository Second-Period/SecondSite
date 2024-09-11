<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <?php echo e(__('Users')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   <?php echo e(__('Lista de Usuários')); ?> 
                </div>
            </div>
            <div class="mt-2 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg overflow-x-auto">
                <table class="roudend-lg table-auto mx-auto divide-y divide-gray-700 min-w-full">
                    <thead>
                        <tr class="divide-x divide-gray-600 sm:overflow-x-auto">
                            <th class="p-4 text-md text-center text-gray-100 tracking-normal">ID</th>
                            <th class="p-4 text-md text-center text-gray-100 tracking-normal"><?php echo e(__('Username')); ?></th>
                            <th class="p-4 text-md text-center text-gray-100 tracking-normal"><?php echo e(__('Email')); ?></th>
                            <th class="p-4 text-md text-center text-gray-100 tracking-normal"><?php echo e(__('Admin')); ?></th>
                            <th class="p-4 text-md text-center text-gray-100 tracking-normal"><?php echo e(__('Created at')); ?></th>
                            <th class="p-4 text-md text-center text-gray-100 tracking-normal"><?php echo e(__('Updated at')); ?></th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-800 divide-y divide-gray-600">
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="divide-x divide-gray-600">
                                <td class="p-2 text-md text-center text-gray-100 tracking-normal"><?php echo e($user->id); ?></td>
                                <td class="p-2 text-md text-center text-gray-100 tracking-normal"><?php echo e($user->name); ?></td>
                                <td class="p-2 text-md text-center text-gray-100 tracking-normal"><?php echo e($user->email); ?></td>
                                <td class="p-2 text-md text-center text-gray-100 tracking-normal"><?php echo e($user->is_staff); ?></td>
                                <td class="p-2 text-md text-center text-gray-100 tracking-normal"><?php echo e($user->created_at); ?></td>
                                <td class="p-2 text-md text-center text-gray-100 tracking-normal"><?php echo e($user->updated_at); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\Users\Usuario\Desktop\pd2\resources\views/users.blade.php ENDPATH**/ ?>