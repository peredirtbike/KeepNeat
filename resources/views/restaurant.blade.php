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
                            <td>Opinions</td>
                            <td>Imatges</td>

                        </tr>
                        @foreach ($restaurants as $restaurant)
                            <tr>
                                <td>{{ $restaurant->nom }}</td>
                                <td>{{ $restaurant->descripcio }}</td>
                                <td>{{ $restaurant->opinions }}</td>
                                <td>
                                    <img src="asset('/uploads/restaurant/{{ $restaurant->nom }}/{{ $restaurant->imatges }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                                        
                                    
                                    <!-- <img src="/uploads/restaurant/{{ $restaurant->imatges }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;"> -->
                                
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
