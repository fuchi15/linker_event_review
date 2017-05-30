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
    @yield('head')
</head>
<body id="app">
    {!! Form::open(['route' => ['review.store'], 'method' => 'post']) !!}
        {{ csrf_field() }}
        <select name="evaluation">
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
        </select>
        <textarea style="border: 1px solid black;" name="comment"></textarea>
        <button type="submit">submit</button>
    {!! Form::close() !!}
    <script src="/js/app.js"></script>
</body>
</html>
