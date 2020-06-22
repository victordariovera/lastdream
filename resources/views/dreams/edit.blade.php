@extends ('layout')

@section ('content')


<div class="container my-1">

    <form action="{{URL::to('/dreams/'.$dream->id)}}" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group">
          <label for="title">Título</label>
          <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}}" name="title" id="title" placeholder="Ingresá aca el titulo" value="{{old('title', $dream->title)}}">
          @error('title')<div class="invalid-feedback">{{ $errors->first('title') }}</div> @enderror

        </div>
        <div class="form-group">
          <label for="body">Entrada de diario</label>
          <textarea class="form-control {{ $errors->has('body') ? 'is-invalid' : ''}}" name="body" id="body" rows="3" placeholder="Como fue tu dia?">{{old('body', $dream->body)}}</textarea>
          @error('body')<div class="invalid-feedback">{{ $errors->first('body') }}</div> @enderror
        </div>


      <button class="btn btn-primary" type="submit">


        Guardar

      </button>


    <a class="btn btn-danger" href="{{URL::to('/')}}" role="button">
        Cancelar
    </a>

</form>
</div>


@endsection
