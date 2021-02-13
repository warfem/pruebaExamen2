@extends('eskPagina')
@section('contenedor')
    
<div class="container text-center">
    
        <div class="alert alert-danger mt-2">

        <form action="{{route('contacto.store')}}" method="post">
            @csrf

            <div class="from-group ">
                <label for="ruta">Ruta:</label>
                <input type=" text" class="form-control mx-auto" style="width: 500px" name="ruta" value="ruta">
            </div>
            <div class="from-group ">
                <label for="tiempo">Tiempo:</label>
                <input type="text" class="form-control mx-auto" style="width: 500px" name="tiempo" value="Tiempo de ruta">
            </div>   
            <div class="from-group ">
                <label for="normas">Normas:</label>
                <input type="text" class="form-control mx-auto" style="width: 500px" name="normas" value="Normas">
            </div>   
            <div class="from-group ">
                <label for="precio">Precio:</label>
                <input type="text" class="form-control mx-auto" style="width: 500px" name="precio" value="Precio en euros">
            </div>   
            <button type="submit" class=" btn btn-primary mb-2">Añadir</button>
          
        </form>
    </div>


@endsection