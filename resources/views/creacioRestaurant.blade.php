@extends('layouts.app')

@section('content')

@if (Auth::user()->rol_id != 1)

<div class="container">
<form enctype="multipart/form-data" class="form-horizontal" action="{{route('agregarRestaurant')}}" role="form" method="POST">
        <div class="container">
            <h2 class="display-4 mb-4">Crea aqui el teu restaurant</h2>

            <div class="form-row">
                <p> <strong> Dades del restaurant:</strong></p>
              </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="inputEmail4">Nom del restaurant </label>
                  <input class="form-control" type="text" name="nomRest" id="nomRest" value="" placeholder="Introdueix un nom per al teu restaurant...">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Descripció</label>
                  <textarea class="form-control" type="text" name="descRest" id="descRest" value="" placeholder="Introdueix una descripció per al teu restaurant..."></textarea>

                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-2">
                  <label for="inputEmail4">Tipus de cuina</label>
                  <input class="form-control" type="text" name="tipusCuina" id="tipusCuina" value="" placeholder="Mediterrania, oriental">

                </div>
            </div>

            {{-- <div class="form-row">
                <div class="form-group col-md-1">
                  <label for="inputEmail4">Puntuació:</label>
                  <input class="form-control" type="text" name="nEstrelles" id="nEstrelles" value="{{$estrelles}}" placeholder="{{$estrelles}} estrelles">

                </div>
            </div> --}}

            <div class="form-row">
                <div class="form-group col-md-2">
                  <label for="inputEmail4">Rang de preus:</label>
                  <input class="form-control" type="text" name="preuRest" id="preuRest" value="" placeholder="15-30€">

                </div>
            </div>

            <div class="form-row">
                <p> <strong>Localització/Contacte:</strong></p>

            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Adreça</label>
                  <input class="form-control" type="text" name="adrecaRest" id="adrecaRest" value="" placeholder="Introdueix una adreça...">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-2">
                  <label for="inputEmail4">Telèfon de contacte</label>
                  <input class="form-control" type="text" name="telefonRest" id="telefonRest" value="" placeholder="Introdueix un telèfon...">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Horari</label>
                  <input class="form-control" type="text" name="horariRest" id="horariRest" value="" placeholder="Introdueix un horari...">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="submit" class="btn btn-primary mr-2" value="Guardar">
                  <a style="color: black" href="{{route('home')}}">Cancel</a>

                  <input type="hidden" name="idUser" id="idUser" value="{{Auth::user()->id}}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  
                </div>
            </div>


                <footer class="text-center">
                <p>&copy; Keep n' Eat 2020</p>
              </footer>
        </div>
    </form>
    @else
    <h1 class="text-center">No tens permis per crear un Restaurant</h1>

    <footer class="text-center">
      <p>&copy; Keep n' Eat 2020</p>
    </footer>

    @endif


@endsection 
