@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PERFIL DE -> {{ Auth::user()->name }}</div>

                <div class="card-body">
                    <form action="{{route('editarUsuariPersonal')}}" method="POST">
                    @method('PUT')
                    @csrf

                        <input type="hidden" name="idUser" id="idUser" value="{{Auth::user()->id}}">

                        Nom:
                        <input type="text" name="nameUser" id="nameUser" value="{{Auth::user()->name}}"><br>

                        Cognom:
                        <input type="text" name="secondUser" id="secondUser" value="{{Auth::user()->cognoms}}"><br>

                        DNI:
                        <input type="text" name="dniUser" id="dniUser" value="{{Auth::user()->nif}}"><br>

                        Data Naixement:
                        <input type="date" name="naixementUser" id="naixementUser" value="{{Auth::user()->data_naixement}}">
                        
                        <input type="submit" value="Finalitzar">

                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
