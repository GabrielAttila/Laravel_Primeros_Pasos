@extends('layout')

@section('content')


    <div class="row">
        <div class="col-lg-16">
            <h1>Notes</h1>

            <p>
                <b>Categoria:</b>
                @if($note->category)
                    <label class="label label-info">{{ $note->category->name }}</label>
                @else
                    <span class="label label-info">Other</span>
                @endif
                | <a href="{{ url('notes') }}">View all notes</a>
            </p>
            <hr>
            {{ $note->note }}

        </div>
    </div>
@endsection