@extends('layout')
@section('title', 'registro de fallas')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">

			@include('partials.validation-errors')

			
			@include('falla.show', ['btnText'=>'Guardar'])


			</form>
		</div>
	</div>
</div>
@endsection