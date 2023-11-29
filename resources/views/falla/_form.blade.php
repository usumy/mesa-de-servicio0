@csrf
<div class="container mt-5">
    
    <form id="fallaForm" method="POST" action="procesar_formulario.php">
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción de la Falla</label>
            <textarea
             class="form-control" 
             id="descripcion"
             name="descripcion"
             rows="3" required>
            </textarea>
        </div>
       
        <button class="btn btn-primary btn-block"> {{$btnText}} </button>
        <a class="btn btn-link btn-block " 
        href="{{route('falla.index')}}">
        Cancelar </a>
        
    </form>
</div>
