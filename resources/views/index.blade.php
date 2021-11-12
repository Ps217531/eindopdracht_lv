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

                    <a href="#">Home</a>

                </li>

                <li class="mr-6 flex-auto">

                    <a class="text-white-800 hover:text-gray-400" href="/create"> Een dier toevoegen</a>

                </li>
                </li>
                <li class="mr-6 flex-auto">

                    <a class="text-white-800 hover:text-gray-400" href="/update"> Een dier wijzigen</a>


            </ul>

        </div>


    <div class="container">
        <div class="gegevens">

{{--            <a href="{{$dieren->id}}--}}

            @foreach($dieren as $dier)

                <td class="td" >dier: <br>  {{$dier->dier}} <br> Chipnummer: <br>    {{$dier->chipnummer}}   </td>

                <button   class="flex-shrink-0 bg-orange-500 hover:bg-green-700 border-teal-200 hover:border-teal-700 text-sm border-4 text-black py-1 px-2 rounded">Update</button>

                <button   class="flex-shrink-0 bg-red-500 hover:bg-green-700 border-teal-200 hover:border-teal-700 text-sm border-4 text-black py-1 px-2 rounded">Delete</button>

            @endforeach
        </div>
        <img class="imgitem2" src="{{ URL('images/hondenpoot.jfif')}}">
        <img class="imgitem3" src="{{ URL('images/zieligehond.jfif')}}">


    </div>

    </body>
</html>
