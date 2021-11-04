
{{-- estendo il file di layout --}}
@extends('layout.master')
{{-- passo a titolo dettagli --}}
@section('title','dettagli')
{{-- passo al contenuto quello che è compreso tra @section e @endsection --}}
@section('content')
    <img src="https://picsum.photos/200/300" alt="lorem picsium">
@endsection