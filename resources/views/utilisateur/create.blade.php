@extends('layout')
@section('content')
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
@endif
<div class="row">
    <div class="col-md-6">
        <form action=" {{ route('utilisateurs.store') }} " method="post">
            @csrf
            <div class="mb-3">
                <label for="nom">Nom</label>
                <input class="form-control" name="nom" value="{{ old('nom') }}">
            </div>
            <div class="mb-3">
                <label for="prenom">Prenom</label>
                <input class="form-control" name="prenom" value="{{ old('prenom') }}">
            </div>
            <div class="mb-3">
                <label for="adresse">Adresse</label>
                <input class="form-control" name="adresse" value="{{ old('adresse') }}">
            </div>
            <div class="mb-3">
                <label for="poste">Poste</label>
                <input class="form-control" name="poste" value="{{old('poste')}}">
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input class="form-control" name="email" value="{{old('email')}}">
            </div>
            <div class="mb-3">
                <label for="Motdepass">Mot de pass</label>
                <input class="form-control" name="mot_de_pass">
            </div>
            <div class="mb-3">
                <label for="cMotdepass" >Confirmation Mot de pass <span class="text-danger"></sapn></label>
                <input class="form-control" name="confirmation_mot_de_pass">
            </div>
            <div class="mb-3">
                <label for="telephone">telephone</label>
                <input class="form-control" name="telephone" value="{{ old('telephone')}}">
            </div>
            <div class="mb-3">
                <button class=" btn btn-primary">Ajouter</button>
                <a class="btn btn-danger">Annuler</a>
            </div>
            
    </div>
</div>