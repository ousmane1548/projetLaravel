@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            

            <div class="panel panel-default">
                <div class="panel-heading">{{$titre}}</div>

                <div class="panel-body text-center">
                     @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2><strong>{{trans('etudiant.nom')}} : </strong> {{$etudiant->nom}}</h2>
                    <h2><strong>{{trans('etudiant.prenom')}} : </strong> {{$etudiant->prenom}}</h2>
                    <h3>
                        <a href="{{url('etudiants/edit/'.$etudiant->id)}}" data-toggle="tooltip" title="{{trans('etudiant.modifier')}}" data-placement="left">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </a>

                        <a href="{{url('etudiants/destroy/'.$etudiant->id)}}" data-placement="right" data-toggle="tooltip" title="{{trans('etudiant.supprimer')}}" style="margin-left: 10px; color: red;" onclick="return confirm('Etes-vous sur de vouloir supprimer ?')">
                    <i class="glyphicon glyphicon-trash"></i>
                </a>
                    </h3>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
