@extends('layouts.app')

@section('content')
    <div class="container">
      <h2 class="display-4 mb-4">{{$nom}}</h2>
      <p></p>
    </div>
  </div>
  <div class="container">
    {{-- <div class="row">
      <div class="col-md-12 shadow p-3 mb-5 bg-white rounded">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          </ol>
          <div class="carousel-inner">
              @foreach($imatges as $key => $imatge)
              <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                  <img src="{{asset('/uploads/restaurant/'.$restId.'/'.$imatge->rutaImatge)}}" class="d-block w-100" height="500" width="500"  alt="imatge"> 
              </div>
              @endforeach
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button"  data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true">     </span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
      </div>
      </div>
    </div> --}}

    <div class="row">
          @foreach($imatges as $key => $imatge)
          <div class="col-md-2 mb-5">
          <img src="{{asset('/uploads/restaurant/'.$restId.'/'.$imatge->rutaImatge)}}" height="180" width="180" alt="">
          </div>
          @endforeach
    </div>
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-6 shadow p-3 mb-5 bg-white rounded">
            <h2>Detalls</h2>
            <p><strong>DESCRIPCIÓ: </strong>{{$descripcio}}</p>
            <p><strong>PUNTUACIÓ MITJA: </strong>{{\App\Opinio::where('restaurant_id',$restId)->pluck('puntuacio')->avg()}}⭐</p>
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
        <input class="form-control" type="number" name="puntuacio" id="puntuacio" min="1" max="5">
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

  <div class="row">
    <div class="col-md-12 mb-2">
      <h2>Opinions i Puntuacions</h2>
    </div>
  </div>
  @foreach ($opinions as $opinio)
    @foreach ($usuaris as $usuari)
      @if ($opinio->usuari_id == $usuari->id)

    <div class="col-md-12 shadow p-3 mb-1 bg-white rounded" style="background-color: #8c8b8b"; >
      <div>
        {{$opinio->puntuacio}}
        <p class="d-flex justify-content-end"><small class="float-right">{{$opinio->data}}</small></p>

      </div>
    <div class="media">
      <a class="media-left" href="#">
        <img class="rounded-circle mr-4" src="/uploads/avatars/{{ $usuari->avatar }}" height="50" width="50">
      </a>
      <div class="media-body">
          <h4 class="media-heading user_name">{{$usuari->name." ".$usuari->cognoms}}</h4>
            {{$opinio->comentari}}
      </div>
    </div>

    </div>
    @endif

  @endforeach
@endforeach

<div class="mb-5"></div>
    
<footer class="text-center">
  <p>&copy; Keep n' Eat 2020</p>
</footer>
 
  </div> <!-- /container -->

  
@endsection
