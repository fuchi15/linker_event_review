<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        {!! Form::open(['route' => ['reviewimage.store'], 'method' => 'post', 'files' => true]) !!}
            {{ csrf_field() }}
            {!! Form::file('test') !!}
            <button type="submit">submit</button>
        {!! Form::close() !!}
        <div id="app">
        <example></example>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
