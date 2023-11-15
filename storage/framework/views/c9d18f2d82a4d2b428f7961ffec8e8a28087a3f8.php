<nav class="navbar navbar-light navbar-expand-lg  bg-white shadow-sm">
	<div class="container">
		<a class="navbar-brand" href="<?php echo e(route('home')); ?>}">
			<?php echo e(config('app.name')); ?>

		</a>
		
		<div>
		 	
		<ul class="nav nav-pills">
			<li class="nav-item">
				<a 
				href="<?php echo e(route('home')); ?>">
					<?php echo app('translator')->get('home'); ?>   <br> 
				</a>

			</li>
			<br>
			<?php if(auth()->guard()->guest()): ?>
					<li class="nav-item">
						<a  
						href="<?php echo e(route('login')); ?>">
							Iniciar sesión     <br>
						</a>
					</li>
					<li class="nav-item">
						<a 
						href="<?php echo e(route('register')); ?>">
							registrar    
						</a>
					</li>
					<?php else: ?>
					<li class="nav-item">
						<a 
						href="<?php echo e(route('falla.index')); ?>">
							registro de fallas    
						</a>
					</li>
						<li class="nav-item" >
							<a class="nav-link"
							href="#" 
							onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">
							Cerrar sesión 
							</a>
						</li>
				<?php endif; ?>


		</ul>
			

		</div>
	</div>
	</nav>
	 <form id="logout-form"
	  action="<?php echo e(route('logout')); ?>" 
	  method="POST" 
	  style="display: none;">
           <?php echo csrf_field(); ?>
     </form><?php /**PATH C:\laragon\www\falla\resources\views/partials/nav.blade.php ENDPATH**/ ?>