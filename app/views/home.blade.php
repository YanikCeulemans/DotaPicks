@extends('layout')

@section('content')
<?php
$modResult = 0;
?>
    <div class="container">
        @foreach($allHeroes as $heroType)
            <div class="col-lg-4 hero-column">
                @foreach($heroType as $factionHero)
                    @for ($i = 0; $i < count($factionHero); $i++)
                        @if ($i % 4 == 0 )
                            <div class="row">
                        @endif
                                <div class="col-lg-3 hero-container"><img src="{{asset('img/heroes/' . $factionHero[$i]->name . '_hphover.png')}}" title="{{ trans(sprintf('heroes.%s',$factionHero[$i]->name)) }}"/></div>
                        @if ($i % 4 == 3 || $i + 1 == count($factionHero))
                            </div>
                        @endif
                    @endfor
                @endforeach
            </div>
        @endforeach
    </div>
@stop