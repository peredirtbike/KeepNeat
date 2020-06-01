@extends('layouts.app')

@section('content')

    <form enctype="multipart/form-data" class="form-horizontal" action="{{ route('updateRestaurant',$restaurant->id) }}" role="form" method="POST">
        <div class="container">
            <h2 class="display-4 mb-4">{{$restaurant->nom}}</h2>
          
            <div class="form-row">
                <p> <strong> Dades del restaurant:</strong></p>
              </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="inputEmail4">Nom del restaurant </label>
                  <input class="form-control" type="text" name="nom" id="nom" value="{{$restaurant->nom}}" placeholder="Introdueix un nom per al teu restaurant...">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Descripció</label>
                  <input class="form-control" type="text" name="descripcio" id="descripcio" value="{{$restaurant->descripcio}}" placeholder="Afegeix una descripció al restaurant...">

                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-2">
                  <label for="inputEmail4">Tipus de cuina</label>
                  <input class="form-control" type="text" name="tipus_cuina" id="tipus_cuina" value="{{$restaurant->tipus_cuina}}" placeholder="Tipus de cuina del restaurant...">

                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-2">
                  <label for="inputEmail4">Rang de preus:</label>
                  <input class="form-control" type="text" name="preu" id="preu" value="{{$restaurant->preu}}" placeholder="Rang de preus pel restaurant...">

                </div>
            </div>

            <div class="form-row">
                <p> <strong>Localització/Contacte:</strong></p>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Adreça</label>
                  <input class="form-control" type="text" name="adreca" id="adreca" value="{{$restaurant->adreca}}" placeholder="Adreça pel restaurant...">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-2">
                  <label for="inputEmail4">Telèfon de contacte</label>
                  <input class="form-control" type="text" name="telefon" id="telefon" value="{{$restaurant->telefon}}" placeholder="Telèfon del restaurant...">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Horari</label>
                  <input class="form-control" type="text" name="horari" id="horari" value="{{$restaurant->horari}}" placeholder="Introdueix un horari...">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="hidden" name="user_id" id="user_id" value="{{$restaurant->user_id}}">
                  {{-- <input type="hidden" name="idDir" id="idDir" value="{{Auth::user()->direccions_id}}"> --}}
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
