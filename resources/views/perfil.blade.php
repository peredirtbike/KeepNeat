
@extends('layouts.app')

@section('content')
<form enctype="multipart/form-data" class="form-horizontal" action="{{ route('update_avatar') }}" role="form" method="POST">

<div class="container" style="margin-top: 5em";>
    <h1>Perfil de {{$user->name}}</h1>
  	<hr>
	<div class="row">
      <!-- left column -->

      <div class="col-md-3">
        <div class="text-center">
            <img name="avatar" accept="image/png, image/jpeg" src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; border-radius:50%; ">
            <input class="form-control" type="file" name="avatar" accept="image/png, image/jpeg">
            <h6>Upload a different photo...</h6>
          
          
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>
        <h3>Personal info</h3>
        
          <div class="form-group">
            <label class="col-lg-3 control-label">Nom:</label>
            <div class="col-lg-8">
              <input class="form-control" name="nameUser" id="nameUser" type="text" value="{{Auth::user()->name}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Cognoms:</label>
            <div class="col-lg-8">
              <input class="form-control" name="secondUser" id="secondUser" type="text" value="{{Auth::user()->cognoms}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">DNI/NIF:</label>
            <div class="col-lg-8">
              <input class="form-control" name="dniUser" id="dniUser" type="text" value="{{Auth::user()->nif}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Data de naixement:</label>
            <div class="col-lg-8">
                <input class="form-control" name="naixementUser" id="naixementUser" type="date" value="{{Auth::user()->data_naixement}}" id="example-date-input">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Carrer:</label>
            <div class="col-lg-8">
              <input class="form-control" name="CarrDirUser" id="CarrDirUser" type="text" value="{{Auth::user()->direccions->carrer}}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Numero:</label>
            <div class="col-lg-8">
              <input class="form-control" name="NumDirUser" id="DirUser" type="text" value="{{Auth::user()->direccions->numero}}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Pis:</label>
            <div class="col-lg-8">
              <input class="form-control" name="PisDirUser" id="DirUser" type="text" value="{{Auth::user()->direccions->pis}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Ciutat:</label>
            <div class="col-lg-8">
              <div class="ui-select">

                <select class="form-control" name="ciutatDirUser" id="ciutatDirUser">
                  <option value="{{ Auth::user()->direccions->ciutats->id }}">{{ Auth::user()->direccions->ciutats->nom }}</option> 

                  @foreach ($ciutats as $ciutat)
                      <option value="{{ $ciutat->id }}">{{ $ciutat->nom }}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Pais:</label>
            <div class="col-lg-8">
              <div class="ui-select">

                <select class="form-control" name="paisDirUser" id="paisDirUser">
                    <option value="{{ Auth::user()->direccions->ciutats->paisos->id }}">{{ Auth::user()->direccions->ciutats->paisos->nom }}</option> 

                    @foreach ($paisos as $pais)
                        <option value="{{ $pais->id }}">{{ $pais->nom }}</option>
                    @endforeach
                </select>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
                <input type="hidden" name="idUser" id="idUser" value="{{Auth::user()->id}}">
                <input type="hidden" name="idDir" id="idDir" value="{{Auth::user()->direccions_id}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <input type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
              <input type="submit" style="float: right;" value="Donar de baixa" class="btn btn-danger">



            </div>
          </div>
        </form>
        <form method="POST" action="{{ route('delete_user') }}">
          @csrf
        
          <input type="hidden" name="idUser" id="idUser" value="{{Auth::user()->id}}">
        </form>

      </div>
  </div>
</div>
@endsection
