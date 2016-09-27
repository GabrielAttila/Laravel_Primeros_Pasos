@extends('layout')

@section('content')

    <h2>Notes</h2>
    <p>
        <a href="{{ url('notes/create') }}"> Add a note </a>
    </p>
    <ul>
        @foreach($notes as $note)
            <li>
                {{ $note->note }}
            </li>
        @endforeach
    </ul>
    <!--
        Colocamos este render de la variable note para imprimir una paginacion en laravel :D
    !>
    {!! $notes->render() !!}

@endsection