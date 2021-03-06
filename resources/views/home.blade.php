@extends ('layout')

@section ('content')

<div class="container my-3 mt-4">
    <div class="row mb-2">



    @forelse($dreams as $dream)

    <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <h4 class="mb-0">{{  str_limit($dream->title, 30) }}</h4>
            <div class="mb-2 text-muted">{{$dream->created_at->setTimezone('America/Argentina/Buenos_Aires')}}</div>
            <p class="card-text mb-auto">{{ str_limit($dream->body, 60)}}</p>


            <a href="{{ route('dreams.show', $dream) }}" class="stretched-link">Seguir leyendo</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
          </div>

        </div>

      </div>


    @empty
        <p>Hey! No tenes Sueños. Hacé clic en "Nuevo" para crearlos.</p>
    @endforelse






    </div>
    @isset($dream)
     <a href="{{ route('dreams.index', $dream) }}">Ver todas las entradas</a>
    @endisset

</div>

@endsection


