@inject('rsa', \App\Services\RSAService::class)

@extends('layouts.app')

@section('content')
    <p>Chiffré : {{$encrypted}}</p>
    <p>Déchiffré : {{$rsa->dechiffrer($encrypted)}}</p>
@endsection
