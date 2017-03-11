@extends ('layouts.master')


@section ('content')

<div class="divTableTitle">
    Trips
</div>
@if($trips->count() == 0)
<div class="demo-card-wide mdl-card mdl-shadow--2dp">
    <h4 style="text-align: center;">
    You currently have to trips! What are you doing, go get some.
    </h4>
</div>
@endif
@if($trips->count() > 0)
<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="margin:0 auto; width:100%">
    <thead>
        <tr>
            <th class="mdl-data-table__cell--non-numeric">From</th>
            <th class="mdl-data-table__cell--non-numeric">To</th>
            <th class="mdl-data-table__cell--non-numeric">Purchased On</th>
            <th>Price</th>
            <th class="mdl-data-table__cell--non-numeric"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($trips as $trip)
        <tr>
            <td class="mdl-data-table__cell--non-numeric">{{$trip->flight->airportFrom->cityName}}</td>
            <td class="mdl-data-table__cell--non-numeric">{{$trip->flight->airportTo->cityName}}</td>
            <td class="mdl-data-table__cell--non-numeric">{{\Carbon\Carbon::parse($trip->created_at)->diffForHumans()}}</td>
            <td>${{$trip->flight->flight_cost}}</td>
            <td>
                <form method="POST" action="/trip/{{$trip->id}}">
                    {{ method_field('DELETE')}}
                    {{ csrf_field() }}
                    <button type="submit" name="flightID" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored" >
                        <i class="material-icons">delete</i>
                    </button>
                </from>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
<div class="divTableTitle">
    <a href="?page=1" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored">
    <i class="material-icons">first_page</i>
    </a>
    @if($trips->currentPage() > 1)
    <a href="{{$trips->previousPageUrl()}}" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored">
    <i class="material-icons">keyboard_arrow_left</i>
    </a>
    @endif
    @if($trips->currentPage() < ceil($trips->total() / 15))
    <a href="{{$trips->nextPageUrl()}}" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored">
    <i class="material-icons">keyboard_arrow_right</i>
    </a>
    @endif
    
    <a href="?page={{ceil($trips->total() / 15)}}" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored">
    <i class="material-icons">last_page</i>
    </a>
</div>

@endsection