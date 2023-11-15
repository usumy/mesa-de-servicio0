

<?php $__env->startSection('title', 'registro de fallas'); ?>
<?php $__env->startSection('content'); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">

			<?php echo $__env->make('partials.validation-errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

			<form  class="bg-while py-3 px-4 shadow rounded"
			method="POST"
			action="<?php echo e(route('falla.store')); ?>">
			<h1 class="display-4">Registro de Fallas</h1>
			<hr>
			<?php echo $__env->make('falla._form', ['btnText'=>'Guardar'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


			</form>
		</div>
	</div>
</div>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\falla\resources\views/falla/index.blade.php ENDPATH**/ ?>