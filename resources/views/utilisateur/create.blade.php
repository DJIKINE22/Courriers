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
        <form action="">
            @csrf
            <div class="mb-3">
                <label for="nom">Nom</label>
                <input class="form-control">
            </div>
            <div class="mb-3">
                <label for="prenom">Prenom</label>
            </div>
            <div class="mb-3">
                <label for="adresse">Adresse</label>
            </div>
            <div class="mb-3">
                <label for="poste">Poste</label>
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
            </div>
            <div class="mb-3">
                <label for="Motdepass">Mot de pass</label>
            </div>
            <div class="mb-3">
                <label for="telephone">telephone</label>
            </div>
            
    </div>
</div>