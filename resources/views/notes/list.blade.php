@extends('layout')

@section('content')

    <h2>Notes</h2>
    <p>
        <a href="{{ url('notes/create') }}"> Add a note </a>
    </p>
    <ul class="list-group">
        @foreach($notes as $note)
            <li class="list-group-item">
                <p>
                    <a href='{{ url("notes/$note->id") }}'>View note</a>
                </p>
                @if($note->category)
                    <label class="label label-info">{{ $note->category->name }}:</label>
                @else
                    <span class="label label-info">Other</span>
                @endif
                {{ str_limit($note->note, $limit = 100, $end = '...') }}
            </li>
        @endforeach
    </ul>
    {!! $notes->render() !!}
@endsection