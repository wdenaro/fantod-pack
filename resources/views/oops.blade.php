@include('includes.html_begin')

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


@include('includes.footer')
@include('includes.html_end')
