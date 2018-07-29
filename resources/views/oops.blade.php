<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('global.siteTitle') }} | Invalid Card ID</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/css/styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <div class="content">

            <h1>Invalid Card ID ({{ $id }})</h1>
            <a class="cta" href="<?php echo route('card.show'); ?>">Show Random</a>

        </div>
        
    </body>
</html>
