@extends('plantilla')

@section('seccion')

<br>

<h1 class="display-4">Notas</h1>

@if ( session('mensaje') )
    <div class="alert alert-success">{{ session('mensaje') }}</div>
@endif

<form action="{{ route('notas.crear') }}" method="POST">
@csrf 

@error('nombre')
        <div class="alert alert-danger">
        El nombre es obligatorio
        </div>    
@enderror

@error('descripcion')
        <div class="alert alert-danger">
        La descripcion es obligatoria
        </div>    
@enderror
  <input type="text" name="nombre" placeholder="Nombre" class="form-control mb2"
  value="{{ old('nombre')}}">
  <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb2"
  value="{{ old('descripcion')}}">
  <button class="btn btn-primary btn-block" type="submit">Agregar</button>

</form>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>

    @foreach($notas as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>

         <a href="{{ route('notas.detalle', $item) }}">
                {{$item->nombre}}
        </a>

      </td>
      <td>{{$item->descripcion}}</td>
      <td>
      <a href="{{ route('notas.editar', $item) }}" class="btn btn-warning btn-sm">Editar</a>
      
        <form action="{{ route('notas.eliminar', $item) }}" method="POST" class="d-inline">
        @method('DELETE')
        @csrf 

          <button class="btn btn-danger btn-sm" type=submit>
          Eliminar
          </button>    

        </form>

      </td>
    </tr>
    @endforeach
    </tbody>
</table>


{{ $notas->links()}}


@endsection


   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>