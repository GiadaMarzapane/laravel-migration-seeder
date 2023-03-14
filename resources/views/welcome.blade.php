<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @vite('resources/js/app.js')

        <title>Laravel Migration Seeder</title>
    </head>
    <body>
        <h1 class="text-center mb-5">Laravel Migration Seeder</h1>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div>
                        @foreach ($trains as $element)
                            <div class="d-flex justify-content-evenly border-bottom">
                                <p style="width: calc(100% / 5)">{{ $element->azienda}}</p>
                                <p style="width: calc(100% / 5)">{{ $element->stazione_partenza}} -></p>
                                <p style="width: calc(100% / 5)">{{ $element->stazione_arrivo}}</p>
                                <p style="width: calc(100% / 5)">{{ $element->orario_partenza}}</p>
                                <p style="width: calc(100% / 5)">{{ $element->orario_arrivo}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
