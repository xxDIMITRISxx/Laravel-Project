<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <h1>Where can i find?</h1>
@if ($errors->any())
    <div>
        Errors:
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('message'))
    <p><b>{{ session('message')}}</b></p>    
@endif

    <div>
        @yield('content')
    </div>
</body>
</html>

