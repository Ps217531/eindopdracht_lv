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

            <a class="text-white-800 hover:text-gray-400" href="/dieren/create"> Een dier toevoegen</a>

        </li>
        </li>
        <li class="mr-6 flex-auto">

            <a class="text-white-800 hover:text-gray-400" href="/update"> Een dier wijzigen</a>


    </ul>

</div>


<div class="container">
    <div class="gegevens">
00

        {{--            <a href="/dier/delete{{ $dieren->id }}/delete"     --}}
        @foreach($dieren as $dieren)

            <a href="/dieren/{{$dieren->id}}>   <td class="td">dier: <br> {{$dieren->dier}} <br> Chipnummer: <br>  {{$dieren->chipnummer}}   </td></a>


            <button
                class="flex-shrink-0 bg-orange-500 hover:bg-green-700 border-teal-200 hover:border-teal-700 text-sm border-4 text-black py-1 px-2 rounded">
               <a style="color: orange" href = '/dieren/{{ $dieren->id }}/edit'>update</a>
            </button>
                <form action="{{route('dieren.destroy', $dieren->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
           <input value="Delete" type="submit"  class="flex-shrink-0 bg-red-500 hover:bg-green-700 border-teal-200 hover:border-teal-700 text-sm border-4 text-black py-1 px-2 rounded">

           </input>
            </form>
            @endforeach
                </div>
                <img class="imgitem2" src="{{ URL('images/hondenpoot.jfif')}}">
        <img class="imgitem3" src="{{ URL('images/zieligehond.jfif')}}">

    </div>


    </body>
</html>
