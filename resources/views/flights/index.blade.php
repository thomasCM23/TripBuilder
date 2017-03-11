@extends ('layouts.master')


@section ('content')
<div class="divTableTitle">
    Search For Flights
</div>
<div class="demo-card-wide mdl-card mdl-shadow--2dp">
    <form action="/" method="GET">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label fulllenght">
            <input class="mdl-textfield__input" type="text" id="from" name="from" value="{{Request::query('from')}}">
            <label class="mdl-textfield__label" for="from">From...</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label fulllenght">
            <input class="mdl-textfield__input" type="text" id="to" name="to" value="{{Request::query('to')}}">
            <label class="mdl-textfield__label" for="to">To...</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
            <input class="mdl-textfield__input" type="number" id="min" name="min" value="{{Request::query('min')}}">
            <label class="mdl-textfield__label" for="min">Min Price...</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
            <input class="mdl-textfield__input" type="number" id="max" name="max" value="{{Request::query('max')}}">
            <label class="mdl-textfield__label" for="max">Max Price...</label>
        </div>
        <div class="mdl-card__actions mdl-card--border">
            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" style="float:right">
                Search
            </button>
        </div>

    </form>
</div>
<hr/>

<div class="divTableTitle">
    Flights Available
</div>

   
<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="margin:0 auto; width:100%">
    <thead>
        <tr>
            <th class="mdl-data-table__cell--non-numeric">From</th>
            <th class="mdl-data-table__cell--non-numeric">To</th>
            <th class="mdl-data-table__cell--non-numeric">Departing</th>
            <th>Price</th>
            <th class="mdl-data-table__cell--non-numeric"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($flights as $flight)
        <tr>
            <td class="mdl-data-table__cell--non-numeric" style="padding-right:100px">{{$flight->airportFrom->cityName}}</td>
            <td class="mdl-data-table__cell--non-numeric" style="padding-right:100px">{{$flight->airportTo->cityName}}</td>
            <td class="mdl-data-table__cell--non-numeric" style="padding-right:100px">{{$flight->time_departure}}</td>
            <td>
                ${{$flight->flight_cost}}
            </td>
            <td class="mdl-data-table__cell--non-numeric">
            <!-- not sure this is the best way of doing it -->
                <form method="POST" action="/trip">
                {{ csrf_field() }}
                    <button type="submit" value="{{$flight->id}}" name="flightID" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" >
                        Book
                    </a>
                
                </from>
            <td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="divTableTitle">
    @if($flights->perPage() == 15)
    <a href="{{$flights->nextPageUrl()}}" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored">
        <i class="material-icons">shuffle</i>
    </a>
    @endif
    @if($flights->perPage() == 20 )
    <a href="?{{'page=1&from=' . Request::query('from') . '&to='. Request::query('to') . '&min='. Request::query('min') . '&max='. Request::query('max')}}" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored">
    <i class="material-icons">first_page</i>
    </a>
    @if($flights->currentPage() > 1)
    <a href="{{$flights->previousPageUrl().'&from=' . Request::query('from') . '&to='. Request::query('to') . '&min='. Request::query('min') . '&max='. Request::query('max')}}" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored">
    <i class="material-icons">keyboard_arrow_left</i>
    </a>
    @endif
    @if($flights->currentPage() < ceil($flights->total() / 20))
    <a href="{{$flights->nextPageUrl().'&from=' . Request::query('from') . '&to='. Request::query('to') . '&min='. Request::query('min') . '&max='. Request::query('max')}}" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored">
    <i class="material-icons">keyboard_arrow_right</i>
    </a>
    @endif
    
    <a href="?page={{ceil($flights->total() / 20).'&from=' . Request::query('from') . '&to='. Request::query('to') . '&min='. Request::query('min') . '&max='. Request::query('max')}}" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored">
    <i class="material-icons">last_page</i>
    </a>
    @endif
</div>

@endsection