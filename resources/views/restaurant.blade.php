@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">NOMBRE RESTAURANTE</div>

                <div class="card-body">

                <div class="table-container">
                    <table class="table table-bordred table-striped">
                        <tr>
                            <td>Nom</td>
                            <td>Descripcio</td>
                            <td>ID USER</td>

                        </tr>
                        @foreach ($restaurants as $restaurant)
                            <tr>
                                <td>{{ $restaurant->nom }}</td>
                                <td>{{ $restaurant->descripcio }}</td>
                                <td>{{ $restaurant->id_usuari }}</td>

                                <td>
                                
                                </td>



                            </tr>
                        @endforeach
                    </table>
                </div>






                </div>
            </div>
        </div>
    </div>
</div>
@endsection
