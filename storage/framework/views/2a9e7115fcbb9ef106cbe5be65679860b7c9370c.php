<!DOCTYPE html>
<html>
<head>
	<title><?php echo $__env->yieldContent('title'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
	<script type="<?php echo e(mix('js/app.js')); ?>" defer></script>
	<style>

	</style>
	<link rel="shortcut icon" href="/img/a.png" />
</head>
<body>
	<div id="app" class="d-flex flex-column h-screen 
		justify-content-between">
		<header>
			<?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<?php echo $__env->make('partials.session-status', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</header>
		<main class="py-3">
			<?php echo $__env->yieldContent('content'); ?>
		</main>	

		<footer class="bg-white text-center 
		text-black-50 py-3 shadow">
			<?php echo e(config('app.name')); ?>| copyrigth @ <?php echo e(date('y')); ?>

		</footer>

	</div>
</body>
</html><?php /**PATH C:\laragon\www\falla\resources\views/layout.blade.php ENDPATH**/ ?>