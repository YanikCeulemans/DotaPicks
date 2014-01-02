@extends('layout')

@section('content')
    <div class="container">
        <div class="col-lg-12 selected-hero-container">
            <div class="combos"></div>
            <div class="selected-hero"></div>
            <div class="counters"></div>
        </div>
    </div>
    <div class="container">
        @foreach($allHeroes as $heroType)
            <div class="col-lg-4 hero-column">
                @foreach($heroType as $factionHero)
                    @for ($i = 0; $i < count($factionHero); $i++)
                        @if ($i % 4 == 0 )
                            <div class="row">
                        @endif
                                <div class="col-lg-3 hero-container"><img src="{{asset('img/heroes/' . $factionHero[$i]->name . '_hphover.png')}}" title="{{ trans(sprintf('heroes.%s',$factionHero[$i]->name)) }}" data-toggle="tooltip" data-id="{{ $factionHero[$i]->id }}"/></div>
                        @if ($i % 4 == 3 || $i + 1 == count($factionHero))
                            </div>
                        @endif
                    @endfor
                    <br>
                @endforeach
            </div>
        @endforeach
    </div>
@stop
