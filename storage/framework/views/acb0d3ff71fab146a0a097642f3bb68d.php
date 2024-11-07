<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css']); ?>
    <title>Field</title>
</head>
<body class="bg-gray-200 font-sans">

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php if(Request::route()->named('cadastro') || Request::route()->named('login') || Request::route()->named('about')): ?>
        
    <?php else: ?>
        <?php echo $__env->make('partials.footer.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>    
    <?php endif; ?>
    
    <?php if(Request::route()->named('about')): ?>
        <?php echo $__env->make('partials.footer.about_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    
</body>
<?php echo app('Illuminate\Foundation\Vite')(['resources/js/carrinho.js','resources/js/app.js']); ?>
</html><?php /**PATH C:\Users\Usuario\Desktop\SecondSite\resources\views/index.blade.php ENDPATH**/ ?>