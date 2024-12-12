<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <title>Laravel Crud Operations</title>
</head>
<body>
    <div class="custom-container">
        <div class="custom-row">
            <div class="header">
                <ul>
                    <li><a href="{{route('read')}}">Read</a></li>
                    <li><a href="{{route('insert')}}">Insert</a></li>
                    <li><a href="{{route('update')}}">Update</a></li>
                    <li><a href="#">Delete</a></li>
                </ul>
            </div>
            @hasSection ('main')
            @yield('main')
            @else
            <a href="{{route('read')}}"><button class="m-4 px-4 btn btn-danger">Show</button></a>
            @endif
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="{{ asset('js/welcome.js') }}"></script>

</html>
