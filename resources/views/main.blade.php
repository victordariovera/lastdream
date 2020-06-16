@extends ('layout')

@section ('content')

<div class="container my-3">
    <div class="row mb-2">

        @foreach ($diaries as $diary)

        <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h4 class="mb-0">{{ $diary->title }}</h4>
              <div class="mb-1 text-muted">{{$diary->created_at}}</div>
              <p class="card-text mb-auto">{{ str_limit($diary->body, 100)}}</p>


              <a href="{{URL::to('/diaries/'.$diary->id)}}" class="stretched-link">Seguir leyendo</a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            </div>

          </div>

        </div>

        @endforeach




    </div>

    <a href="{{URL::to('/diaries')}}">Ver todas las entradas</a>
</div>

@endsection


