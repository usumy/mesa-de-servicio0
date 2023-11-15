
<?php if(session('status')): ?>
	<div class="alert alert-primary alert-dismissible fade 
	show" role="alert">
		<?php echo e(session('status')); ?>

		<button
		type="button"
		class="close"
		data-dismiss="alert"
		aria-label="close">
		<span aria-hidden="true">&times;</span>
		</button>
	</div>
	
<?php endif; ?><?php /**PATH C:\laragon\www\falla\resources\views/partials/session-status.blade.php ENDPATH**/ ?>