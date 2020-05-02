@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       
    <div class="col-md-5">
        <h3 class="text-center mb-4 mt-2">Crea el teu Restaurant</h3>

        <form enctype="multipart/form-data" action="{{ route('agregarRestaurant') }}" method="post">
            @csrf

            <div class="form-group">
                <input type="text" class="form-control" id="nomRest" name="nomRest" placeholder="Introdueix el nom">
            </div>

            <div class="form-group">
                <textarea name="descRest" id="descRest" cols="30" rows="10"></textarea>
                <!-- <input type="text" class="form-control" id="descRest" name="descRest" placeholder="Introdueix una petita descripcio"> -->
            </div>

            <div class="form-group">
                <input required type="file" class="form-control" name="images[]" placeholder="address" multiple>
            </div>


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
