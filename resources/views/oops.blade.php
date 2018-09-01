
@extends ('layout')


@section ('title')
    Ooooops!
@endsection

@section ('content')

    <div class="content">

        <h1>Invalid Card ID ({{ $id }})</h1>
        <a class="cta" href="<?php echo route('card.show'); ?>">Show Random</a>

    </div>

@endsection
