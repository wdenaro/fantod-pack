<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('global.siteTitle') }} | Splash Screen</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/css/styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <div class="content">

            <h1>{{ config('global.siteTitle') }} Viewer</h1>

            <div class="row justify-content-center">

                <div class="col-12 col-md-6 card_wrapper">
                    <div class="card_wrapper">
                        <img class="card_art" src="/images/fantod_cover.jpg" />
                        <a class="cta" href="<?php echo route('card.show'); ?>">Go</a>
                    </div>
                </div>
            
            </div>

        </div>

        @include('includes.footer')

    </body>
</html>
