
{{-- estendo il file di layout --}}
@extends('layout.master')
{{-- passo a titolo homepage --}}
@section('title','homepage')
{{-- passo al contenuto quello che è compreso tra @section e @endsection --}}
@section('content')
    <p>il mio nome è {{$nome}}, {{$cognome}}</p>
    <p>le mie proprieà sono:</p>
    <ul>
        @foreach ($proprietà as $item)
            <li>{{$item}}</li>    
        @endforeach
    </ul>
@endsection