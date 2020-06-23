@extends ('layout')

@section ('content')


<div class="container  my-2">

    <div class="blog-post">
        <h2 class="blog-post-title">{{ $dream->title }}</h2>

        <p class="blog-post-meta">{{ $dream->created_at }}</p>





<p></p>
        <p>

            {{ $dream->body }}

        </p>

        <div class="container">
            <div class="row">

                <div class="col-xs-6">
        <a class="btn btn-primary" href="{{ route('dreams.edit', $dream) }}" role="button">
            Editar
        </a>
    </div>
    <div class="col-xs-6 ml-2 ">
    </div>
    <div class="col-xs-6">

        <a class="btn btn-danger" href="#" role="button" data-toggle="modal" data-target="#borrarModal" dreamId="{{ route('dreams.delete', $dream) }}">
            Borrar
        </a>

      </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 mt-4">
      <a href="{{ route('dreams.index') }}">Ver todas las entradas</a>
            </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="borrarModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Borrar entrada</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>¿Estás seguro que querés borrar la entrada?</p>
        </div>
        <div class="modal-footer">
            <form action="" method="post" id="formBorrarModal">
                <input class="btn btn-danger" type="submit" value="Borrar" />

                @csrf
                @method('DELETE')
            </form>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>





@endsection
