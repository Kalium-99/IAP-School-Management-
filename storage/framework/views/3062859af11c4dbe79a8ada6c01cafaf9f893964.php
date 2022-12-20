<<html>
    <head>
        <title>Dunemarch Management System</title>
        <link rel="stylesheet" type="text/css" href=<?php echo e(url('css/example.css')); ?>>
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Akshar:wght@500&family=Inder&family=Kalam:wght@400;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <?php if(Route::has('login')): ?>
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    <?php if(auth()->guard()->check()): ?>
                        <a  class="nav" href="<?php echo e(url('/dashboard')); ?>" class="text-sm text-gray-500 underline">Dashboard</a>
                    <?php else: ?>
                        <a class="nav" href="<?php echo e(route('login')); ?>" class="text-sm text-gray-500 underline">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a class="nav" href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-500 underline">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                    
                </div>
            <?php endif; ?>
        
        <section class="container">
        <img src="<?php echo e(asset('image/3.jpg')); ?>" alt="image">
        <br>

        
        
    
    <div class="home">
            <h1 >Dunemarch University</h1>
        <h4>Preparing you for your bright future!</h4>
        </div>
    </section>
       



    </body>
</html>


<?php /**PATH C:\xampp2\htdocs\IAP-School-Management--master\resources\views/welcome.blade.php ENDPATH**/ ?>