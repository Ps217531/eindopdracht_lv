<!doctype html>
<html lang="en">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="bg-gradient-to-r from-gray-400 to-gray-800 text-white text-5xl">

    <ul class="flex p-4">

        <li class="mr-6 flex-auto">

            <a href="/">Home</a>

        </li>

        <li class="mr-6 flex-auto">

            <a class="text-white-800 hover:text-gray-400" href="/create"> Een dier toevoegen</a>

        </li>
        </li>
        <li class="mr-6 flex-auto">

            <a class="text-white-800 hover:text-gray-400" href="/update"> Een dier wijzigen</a>


    </ul>

</div>
<form action = "{{route('dieren.store')}}" method = "post">
    @CSRF
<table>
    <tr>
        <td>dier:</td>
        <td><input type='text' name='dier'/></td>
    <tr>
        @error('dier')
        <div>
            {{$message}}
        </div>
        @enderror
        <td>Chipnummer:</td>
        <td><input type="text" name='chipnummer'/></td>
    </tr>
    @error('chipnummer')
    <div>
        {{$message}}
    </div>
    @enderror

    <tr>
        <td colspan='2'>
            <input type='submit' value="toevoegen"/>
        </td>
    </tr>
</table>
</form>

</body>
</html>
