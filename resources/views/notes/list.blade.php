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
                    <label class="label label-info">{{ $note->category->name }}:</label>
                @else
                    <span class="label label-info">Other</span>
                @endif
                {{ substr($note->note, 0, 100) }}...
                <a class="small" href='{{ url("notes/".$note->id) }}'>View note</a>
            </li>
        @endforeach
    </ul>
    {!! $notes->render() !!}
@endsection