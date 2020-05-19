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
        <form class="form-horizontal" action="{{ route('updateRestaurant', $restId) }}" role="form" method="POST">
        @csrf
            <div class="col-md-8">
                <h2>Detalls</h2>

                <p><strong>NOM: </strong>
                    <input type="text" name="nNom" id="nNom" value="{{$nom}}" placeholder="{{$nom}}">
                </p>

                <p><strong>DESCRIPCIÓ: </strong>
                    <input type="text" name="nDescripcio" id="nDescripcio" value="{{$descripcio}}" placeholder="{{$descripcio}}">
                </p>

                <p><strong>PUNTUACIO: </strong>
                    <input type="text" name="nEstrelles" id="nEstrelles" value="{{$estrelles}}" placeholder="{{$estrelles}} estrelles">
                </p>

                <p><strong>RANG DE PREUS: </strong>
                    <input type="text" name="nPreu" id="nPreu" value="{{$preu}}" placeholder="{{$preu}} €">
                </p>

                <p><strong>TIPUS DE CUINA: </strong>
                    <input type="text" name="nTipus" id="nTipus" value="{{$tipus_cuina}}" placeholder="{{$tipus_cuina}}">
                </p>
            </div>

            <div class="col-md-4">
                <h2>Ubicació i contacte</h2>
                <p><strong>ADREÇA:</strong> 
                    <input type="text" name="nAdreca" id="nAdreca" value="{{$adreca}}" placeholder="{{$adreca}}">
                </p>

                <p><strong>TELEFON:</strong> 
                    <input type="text" name="nTelefon" id="nTelefon" value="{{$telefon}}" placeholder="{{$telefon}}">
                </p>

                <p><strong>HORARI:</strong> 
                    <input type="text" name="nHorari" id="nHorari" value="{{$horari}}" placeholder="{{$horari}}">
                </p>
            </div>
            <input type="hidden" name="idRest" id="idRest" value="{{$restId}}">
            <input type="submit" value="Editar">

            <a href="{{ route('imatgeRestaurant',$restId) }}" type="button" class="btn btn-default">Imatges del restaurant</a>

        </form>


    </div>

    <hr>

    <footer>
      <p>&copy; Keep n' Eat 2020</p>
    </footer>
  </div> <!-- /container -->
@endsection
