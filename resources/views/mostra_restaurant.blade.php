@extends('layouts.app')

@section('content')
    <div class="container">
      <h2 class="display-4 mb-4">{{$nom}}</h2>
      <p></p>
    </div>
  </div>

  <div class="container">

    <!-- Example row of columns -->
    <div class="row">
        
        <div class="col-md-6 shadow p-3 mb-5 bg-white rounded">
            <h2>Detalls</h2>
            <p><strong>DESCRIPCIÓ: </strong>{{$descripcio}}</p>
            <p><strong>PUNTUACIÓ: </strong>{{$estrelles}} estrelles</p>
            <p><strong>RANG DE PREUS: </strong>{{$preu}} €</p>
            <p><strong>TIPUS DE CUINA: </strong>{{$tipus_cuina}}</p>
        </div>

        <div class="col-md-6 shadow p-3 mb-5 bg-white rounded">
            <h2>Ubicació i contacte</h2>
            <p><strong>ADREÇA:</strong> {{$adreca}}</p>
            <p><strong>TELEFON:</strong> {{$telefon}}</p>
            <p><strong>HORARI:</strong> {{$horari}}</p>
        </div>
    </div>

   <div class="row mb-5">
    <div class="col-md-8">
    @if(Auth::user())
    @if(Auth::user()->id == $idPropi)
      <a id="{{$idPropi}}" href="{{ route('modificaRestaurant',$restId) }}">Modificar Restaurant</a>
    @endif
      </div>
    </div>

    <div class="mb-5">
    <div class="form-row">
      <div class="form-group col-md-2">
      <form action="{{ route('opinioSend',$restId) }}" method="post">
      @csrf
        <label>Puntuació</label>
        <input class="form-control" type="number" name="puntuacio" id="puntuacio" min="1" max="100">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Opinió</label>
        <textarea class="form-control" name="opinio" id="opinio" cols="20" rows="2"></textarea>
      </div>
    </div>
    <input type="submit" class="btn btn-primary mr-2" value="Enviar Comentari">
    <input type="hidden" name="idRest" id="idRest" value="{{$restId}}">
    
      </form>
    </div>
  @endif

  @foreach ($opinions as $opinio)
    @foreach ($usuaris as $usuari)
      @if ($opinio->usuari_id == $usuari->id)

    <div class="col-md-12">
      <div>
        {{$opinio->puntuacio}}
        
      </div>
    <div class="media">
      <p class="float-right" style="float: right;"><small>{{$opinio->data}}</small></p>
      <a class="media-left" href="#">
        <img src="/uploads/avatars/{{ $usuari->avatar }}" style="width:32px; height:32px; position:absolute; top:5px; border-radius:50%">
      </a>
      <div class="media-body">
          <h4 class="media-heading user_name">{{$usuari->name}}</h4>
            {{$opinio->comentari}}
                  </div>
    </div>
    <hr class="style1">

    </div>
    @endif

  @endforeach

@endforeach

     


      





    </div>

    <hr>

    <footer class="text-center">
      <p>&copy; Keep n' Eat 2020</p>
    </footer>
  </div> <!-- /container -->
@endsection
