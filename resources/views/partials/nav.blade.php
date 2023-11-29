<nav class="navbar navbar-light navbar-expand-lg  bg-white shadow-sm">
	<div class="container">
		<a class="navbar-brand" href="{{ route('home')}}}">
			{{config('app.name')}}
		</a>
		
		<div>
		 	
		<ul class="nav nav-pills">
			<li class="nav-item">
				<a class="nav-link"
				href="{{route('home')}}">
					@lang('home')   <br> 
				</a>

			</li>
			<br>
			@guest
					<li class="nav-item">
						<a  class="nav-link"
						href="{{ route('login')}}">
							Iniciar sesión     <br>
						</a>
					</li>

					@else
						<li class="nav-item">
							<a class="nav-link"
							href="{{ route('falla.index')}}">
								registro de fallas    
							</a>

						<li class="nav-item" >
							<a class="nav-link"
							href="#" 
							onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">
							Cerrar sesión 
							</a>
						</li>
				@endguest


		</ul>
			

		</div>
	</div>
	</nav>
	 <form id="logout-form"
	  action="{{ route('logout') }}" 
	  method="POST" 
	  style="display: none;">
           @csrf
     </form>