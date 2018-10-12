
@extends ('partials.layout')


@section ('title')
    Welcome
@endsection


@section ('content')

    <div class="content">

        <h1>{{ config('global.siteTitle') }} Viewer</h1>

        <div class="row justify-content-center">

            <div class="col-12 col-md-6 card_wrapper">
                <div class="card_wrapper">
                    <img class="card_art" src="{{ URL::asset('images/fantod_cover.jpg') }}" />
                    <a class="cta" href="<?php echo route('card.show'); ?>">Go</a>
                </div>
            </div>

        </div>

    </div>

@endsection
