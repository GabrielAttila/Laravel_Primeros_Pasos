@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h1>Create a note</h1>
        @include('partials/errors')
        <form method="post" action="{{ url('notes') }}" class="form" >
            {!! csrf_field() !!}
            <!--
                 la funcion old() sirve para que no se borre el contenido cuando ingresamos mas
                 caracteres de lo establecido
            -->
            <textarea name="note" class="form-control" placeholder="Write your note here">

                {{ old('note') }}
            </textarea>
            <button type="submit" class="btn btn-primary">Create note</button>
        </form>
    </div>
</div>
@endsection