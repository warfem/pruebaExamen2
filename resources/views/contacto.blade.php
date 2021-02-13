@extends('eskPagina')
@section('contenedor')
    
<div class="container text-center">
    
        <div class="alert alert-danger mt-2">

        <form action="" method="post">
            @csrf

            <div class="from-group ">
                <label for="nombre">Nombre:</label>
                <input type=" text" class="form-control mx-auto" style="width: 500px" name="nombre" value="nombre">
            </div>
            <div class="from-group ">
                <label for="email">Email:</label>
                <input type="email" class="form-control mx-auto" style="width: 500px" name="email" value="email">
            </div>   

            <div class="from-group">
                <label for="texto">Sugerencia:</label><br>
                <textarea name="mensaje"  id="" cols="60" rows="10" value="texto"></textarea>
            </div>
            <button type="submit" class=" btn btn-primary mb-2">Añadir</button>
          
        </form>
    </div>


@endsection