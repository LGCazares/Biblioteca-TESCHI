<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div style="background-color: black;">
        @include('layouts._header')
        <div style="margin-bottom: 5.5rem;" class="container mt-5">
            @yield('content')
        </div>
    </div>
</body>

</html>
@include('layouts._footer')
