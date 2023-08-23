@extends('layouts.main')

@section('title', 'Home')

@section('main')
    <ul>
        @foreach ($trains as $train)
            <li>
                {{ $train->agency_name }}
            </li>
            <li>
                {{ $train->departure_station }}
            </li>
            <li>
                {{ $train->arrival_station }}
            </li>
            <li>
                {{ $train->departure_time }}
            </li>
            <li>
                {{ $train->arrival_time }}
            </li>
            <li>
                {{ $train->train_code }}
            </li>
            <li>
                {{ $train->number_of_cabs }}
            </li>
            <li>
                @if ($train->in_time)
                    il treno e` in orario
                @endif
            </li>
            <li>
                @if (!$train->cancelled)
                    il treno e` in transito
                @else
                    il treno e` stato soppresso
                @endif
            </li>
        @endforeach
    </ul>
@endsection
