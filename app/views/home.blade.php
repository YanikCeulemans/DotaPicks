@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
        @foreach($allHeroes as $heroType)
            <div class="col-lg-4 hero-column">
                @for ($i = 0; $i < count($heroType); $i++)
                    @if ($i % 4 == 0)
                        <div class="row">
                    @endif
                            <div class="col-lg-3">{{ trans(sprintf('heroes.%s',$heroType[$i]->name)) }} {{ $heroType[$i]->is_radiant }}</div>
                    @if ($i % 4 == 3 || $i + 1 == count($heroType))
                        </div>
                    @endif
                @endfor
            </div>
        @endforeach
        </div>
    </div>
@stop