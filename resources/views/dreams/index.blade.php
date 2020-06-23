@extends ('layout')

@section ('content')



<div class="container">



        <table class="table table-striped table-light">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Fecha</th>
                <th scope="col">Titulo</th>
                <th scope="col">Texto</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>

                @foreach ($dreams->reverse() as $dream)

              <tr>
                <th scope="row">{{$dream->id}}</th>
                <td>15/06/2020 20:14</td>
              <td>
                <a href="{{ route('dreams.show', $dream) }}">{{ str_limit($dream->title, 30) }}</a>
            </td>
            <td>
                    {{ str_limit($dream->body, 50) }}</td>
            <td>
            <td>
                <div class="container">
                    <div class="row">

                        <div class="col-xs-6">
                            <a class="btn btn-primary" href="{{ route('dreams.edit', $dream) }}" role="button">
                            Editar
                            </a>
                        </div>


                        <div class="col-xs-6 ml-2">
                            <a class="btn btn-danger" href="#" role="button" data-toggle="modal" data-target="#borrarModal" dreamId="{{ route('dreams.delete', $dream) }}">
                                Borrar
                            </a>
                      </button>
                  </div>
                </div>

                </td>
              </tr>

              @endforeach

            </tbody>
          </table>

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
  w                <p>¿Estás seguro que querés borrar la entrada?</p>
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


  </div>











  @endsection
