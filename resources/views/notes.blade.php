<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notas</title>
</head>
<body>
    <h2>Notes</h2>

    <ul>
        @foreach($notes as $note)
            <li>
                {{ $note->note }}
            </li>
        @endforeach
    </ul>



    <form method="POST">
        {!! csrf_field() !!}
        <textarea title="ingrese texto"></textarea>
        <button type="submit">Create note</button>
    </form>
</body>
</html>