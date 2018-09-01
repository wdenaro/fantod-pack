
@extends ('layout')


@section ('title')
    Chosen Card
@endsection

@section ('content')

    <div class="content">

        <h1 title="{{ $id }}">{{ config('global.siteTitle') }}</h1>

        <div class="row">

            <div class="col-12 col-md-6">
                <div class="card_wrapper">
                    <a href="<?php echo route('card.show'); ?>"><img class="card_art" src="/images/{{ $src }}"></a>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <h2>{{ $title }}</h2>
                <ul>
                    @foreach ($terms as $term)
                        <li class="{{ ($term->italic) ? "italic" : "" }}">{{ $term->term }}</li>
                    @endforeach
                </ul>
            </div>

        </div>

    </div>

@endsection
