<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css',]); ?>
    <title>Document</title>
</head>
<body class="bg-gray-200 font-sans">
    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <?php if(Request::route()->named('cadastro') || Request::route()->named('login')): ?>
        
    <?php else: ?>
        <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>    
    <?php endif; ?>
</body>
</html><?php /**PATH C:\Users\Usuario\Desktop\pd2\resources\views/index.blade.php ENDPATH**/ ?>