<!DOCTYPE html>
<html lang='ja'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AI partner</title>
    <link href='http://fonts.googleapis.com/css?family=Vidaloka' rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container">
                <a href="/" class="navbar-brand">AIpartner</a>
            </div>
        </nav>
    </header>

    <main>
        <div class="container-main">
            @foreach($your_partners as $your_partner)
            <img class="message-icon" src="{{asset('storage/sample.jpg')}}">
            <div class="message-icon-name">{{ $your_partner->lastname }} {{$your_partner->firstname}}</div>
            <div class="last-message">{{ $your_partner->introduction }}</div>
            @endforeach
        </div>
    </main>
</body>

</html>