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
        
        <div class="col-md-8">
            <h2>Detalls</h2>
            <p><strong>DESCRIPCIÓ: </strong>{{$descripcio}}</p>
            <p><strong>PUNTUACIÓ: </strong>{{$estrelles}} estrelles</p>
            <p><strong>RANG DE PREUS: </strong>{{$preu}} €</p>
            <p><strong>TIPUS DE CUINA: </strong>{{$tipus_cuina}}</p>
        </div>



        <div class="col-md-4">
            <h2>Ubicació i contacte</h2>
            <p><strong>ADREÇA:</strong> {{$adreca}}</p>
            <p><strong>TELEFON:</strong> {{$telefon}}</p>
            <p><strong>HORARI:</strong> {{$horari}}</p>
        </div>

    </div>

    <hr>

    <footer>
      <p>&copy; Keep n' Eat 2020</p>
    </footer>
  </div> <!-- /container -->
@endsection
