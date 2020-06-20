@extends ('layout')

@section ('content')


<div class="container my-1">

    <form action="{{URL::to('/dreams/')}}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
          <label for="exampleFormControlInput1">Título</label>
          <input type="text" class="form-control" name="title" id="title" placeholder="Ingresá aca el titulo">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Entrada de diario</label>
          <textarea class="form-control" name="body" id="body" rows="3" placeholder="Como fue tu dia?"></textarea>
        </div>
        <div class="form-group">
        <label for="image">Imagen</label>
        <input type="file" class="form-control-file" name="image" id="image">
        </div>
      <button class="btn btn-primary" type="submit">
        Guardar
      </button>
    <a class="btn btn-danger" href="#" role="button">
        Cancelar
    </a>

</form>
</div>


@endsection
