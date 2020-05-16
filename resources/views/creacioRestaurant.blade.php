@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       
    <div class="col-md-5">
        <h3 class="text-center mb-4 mt-2">Puja imatges del teu Restaurant</h3>

        <form enctype="multipart/form-data" action="{{ route('agregarRestaurant') }}" method="post">
        {{csrf_field()}}


            <div class="form-group">
                <input type="text" class="form-control" id="nomRest" name="nomRest" placeholder="Introdueix el nom">
            </div>

            <div class="form-group">
                <textarea name="descRest" id="descRest" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="estrellesRest" name="estrellesRest" placeholder="Introdueix nombre d'estrelles">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="preuRest" name="preuRest" placeholder="Introdueix un rang de preus">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="adrecaRest" name="adrecaRest" placeholder="Introdueix la adreça del restaurant">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="telefonRest" name="telefonRest" placeholder="Introdueix el telèfon del restaurant">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="horariRest" name="horariRest" placeholder="Introdueix lhorari del restaurant">
            </div>

            <input type="hidden" name="idUser" id="idUser" value="{{Auth::user()->id}}">
            <button class="btn btn-success btn-block" type="submit">Confirmar</button>

        </form>

        @if(session('agregar'))
            <div class="alert alert-success mt-3">
            {{session('agregar')}}</div>
        @endif
    </div>
    </div>
</div>
@endsection 
