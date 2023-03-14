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
                <div class="col bg-dark text-warning p-3">
                    <div>
                        <div class="d-flex justify-content-evenly border-bottom mb-3">
                                <p style="width: calc(100% / 5)" class="text-uppercase fw-bolder">compagnia</p>
                                <p style="width: calc(100% / 5)" class="text-uppercase fw-bolder">in partenza da</p>
                                <p style="width: calc(100% / 5)" class="text-uppercase fw-bolder">in arrivo a</p>
                                <p style="width: calc(100% / 5)" class="text-uppercase fw-bolder">orario di partenza</p>
                                <p style="width: calc(100% / 5)" class="text-uppercase fw-bolder">orario di arrivo</p>
                            </div>
                        {{-- FOREACH per stampare tutti gli elementi del database in pagina --}}
                        @foreach ($trains as $element)
                            <div class="d-flex justify-content-evenly border-bottom mb-3">
                                <p style="width: calc(100% / 5)">{{ $element->azienda}}</p>
                                <p style="width: calc(100% / 5)">{{ $element->stazione_partenza}}</p>
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
