@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <h2>Perfil de {{ $user->name }}</h2>
            <form enctype="multipart/form-data" action="{{ route('update_avatar') }}" method="POST">
            @csrf
                <input type="file" name="avatar" accept="image/png, image/jpeg"><br><br><br>

                Nom:
                <input type="text" name="nameUser" id="nameUser" value="{{Auth::user()->name}}"><br>

                Cognom:
                <input type="text" name="secondUser" id="secondUser" value="{{Auth::user()->cognoms}}"><br>

                DNI:
                <input type="text" name="dniUser" id="dniUser" value="{{Auth::user()->nif}}"><br>

                Data Naixement:
                <input type="date" name="naixementUser" id="naixementUser" value="{{Auth::user()->data_naixement}}"><br>

                Pais:
                <select name="paisDirUser" id="paisDirUser">
                <option value="{{ Auth::user()->direccions->ciutats->paisos->id }}">{{ Auth::user()->direccions->ciutats->paisos->nom }}</option> 

                  @foreach ($paisos as $pais)
                      <option value="{{ $pais->id }}">{{ $pais->nom }}</option>
                  @endforeach
                </select><br>

                Ciutat:
                <select name="ciutatDirUser" id="ciutatDirUser">
                  <option value="{{ Auth::user()->direccions->ciutats->id }}">{{ Auth::user()->direccions->ciutats->nom }}</option> 

                  @foreach ($ciutats as $ciutat)
                      <option value="{{ $ciutat->id }}">{{ $ciutat->nom }}</option>
                  @endforeach
                </select><br>

                Carrer:
                <input type="text" name="CarrDirUser" id="CarrDirUser" value="{{Auth::user()->direccions->carrer}}"><br>

                Numero:
                <input type="text" name="NumDirUser" id="DirUser" value="{{Auth::user()->direccions->numero}}"><br>

                Pis:
                <input type="text" name="PisDirUser" id="DirUser" value="{{Auth::user()->direccions->pis}}"><br>


                <input type="hidden" name="idUser" id="idUser" value="{{Auth::user()->id}}">
                <input type="hidden" name="idDir" id="idDir" value="{{Auth::user()->direccions_id}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
        </div>
    </div>

    
</div>

<hr>
@endsection
