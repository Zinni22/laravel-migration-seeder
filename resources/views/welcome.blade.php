<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Migration Serve</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <main>
            <h1 class="text-center m-5">
                Trains
            </h1>

            <div class="container">
                <div class="row">

                    @foreach ($trains as $train)
                        <div class="col text-center">

                            <div class="card">
                                <h4>
                                    {{ $train->azienda }}
                                </h4>
                                <h6>
                                    {{ $train->codice_treno }}
                                </h6>

                                <p>
                                    <strong>Partenza da:</strong>
                                    {{ $train->stazione_di_partenza }} <br>
                                    <strong>Alle ore:</strong>
                                    {{ $train->orario_di_partenza }}
                                </p>

                                <p>
                                    <strong>Arrivo a:</strong>
                                    {{ $train->stazione_di_arrivo }}<br>
                                    <strong>Alle ore:</strong>
                                    {{ $train->orario_di_arrivo }}
                                </p>
                                
                            </div>

                        </div>
                    @endforeach
                    
                </div>
            </div>
        </main>

    </body>
</html>
