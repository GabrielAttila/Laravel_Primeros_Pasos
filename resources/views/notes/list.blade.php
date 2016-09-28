@extends('layout')

@section('content')

    <h2>Notes</h2>
    <p>
        <a href="{{ url('notes/create') }}"> Add a note </a>
    </p>
    <ul class="list-group">
        @foreach($notes as $note)
            <li class="list-group-item">
                @if($note->category)
                    <p>
                        <a href='{{ url("notes/$note->id") }}'> View note </a>
                    </p>
                    <label class="label label-info">{{ $note->category->name }}:</label>
                @else
                    <span class="label label-info">Other</span>
                @endif
                {{ $note->note }}
            </li>
        @endforeach
    </ul>
    {!! $notes->render() !!}
@endsection