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
        <div class="mb-3">
            <label for="prioridad" class="form-label">¿Cual es el grado de prioridad?</label>
            <select
             class="form-select"
             id="prioridad"
             name="prioridad" required>
                <option value="alta">Alta</option>
                <option value="media">Media</option>
                <option value="baja">Baja</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="departamento" class="form-label">¿De qué departamento es?</label>
            <select 
            class="form-select" 
            id="departamento" 
            name="departamento" required>
                <option value="departamento-artes">Departamento de artes</option>
                <option value="departamento-contabilidad">Departamento de contabilidad</option>
                <option value="departamento-finanzas">Departamento de finanzas</option>
                <option value="departamento-RH">Departamento de recursos humanos</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="nombreemple" class="form-label">Nombre del empleado</label>
            <input type="text"
             class="form-control"
              id="nombreemple"
              name="nombreemple" required>
        </div>
        <button class="btn btn-primary btn-block"> {{$btnText}} </button>
        <a class="btn btn-link btn-block " 
        href="{{route('falla.index')}}">
        Cancelar </a>
        
    </form>
</div>
