@extends('layouts.app')

@section('content')

 

    <form enctype="multipart/form-data" class="form-horizontal" action="{{ route('updateRestaurant',$restId) }}" role="form" method="POST">
        <div class="container">
            <h2 class="display-4 mb-4">{{$nom}}</h2>
          
            <div class="form-row">
                <p> <strong> Dades del restaurant:</strong></p>
              </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="inputEmail4">Nom del restaurant </label>
                  <input class="form-control" type="text" name="nNom" id="nNom" value="{{$nom}}" placeholder="Introdueix un nom per al teu restaurant...">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Descripció</label>
                  <input class="form-control" type="text" name="nDescripcio" id="nDescripcio" value="{{$descripcio}}" placeholder="{{$descripcio}}">

                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-2">
                  <label for="inputEmail4">Tipus de cuina</label>
                  <input class="form-control" type="text" name="nTipus" id="nTipus" value="{{$tipus_cuina}}" placeholder="{{$tipus_cuina}}">

                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-2">
                  <label for="inputEmail4">Rang de preus:</label>
                  <input class="form-control" type="text" name="nPreu" id="nPreu" value="{{$preu}}" placeholder="{{$preu}} €">

                </div>
            </div>

            <div class="form-row">
                <p> <strong>Localització/Contacte:</strong></p>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Adreça</label>
                  <input class="form-control" type="text" name="nAdreca" id="nAdreca" value="{{$adreca}}" placeholder="{{$adreca}}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-2">
                  <label for="inputEmail4">Telèfon de contacte</label>
                  <input class="form-control" type="text" name="nTelefon" id="nTelefon" value="{{$telefon}}" placeholder="{{$telefon}}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Horari</label>
                  <input class="form-control" type="text" name="nHorari" id="nHorari" value="{{$horari}}" placeholder="Introdueix un horari...">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="hidden" name="idUser" id="idUser" value="{{Auth::user()->id}}">
                  <input type="hidden" name="idDir" id="idDir" value="{{Auth::user()->direccions_id}}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  
                  <input type="submit" class="btn btn-primary mr-2" value="Guardar">
                  <a style="color: black" href="{{route('home')}}">Cancel</a>
                </div>
            </div>

       

                <footer class="text-center">
                <p>&copy; Keep n' Eat 2020</p>
              </footer>
        </div>
    </form>


@endsection
