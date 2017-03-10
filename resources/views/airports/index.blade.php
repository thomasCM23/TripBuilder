@extends ('layouts.master')


@section ('content')

<div class="divTableTitle">
    Search For Airports
</div>
<div class="demo-card-wide mdl-card mdl-shadow--2dp">
    <form action="/airports" method="GET">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label fulllenght">
            <input class="mdl-textfield__input" type="text" id="from" name="search" value="{{Request::query('search')}}">
            <label class="mdl-textfield__label" for="search">Search for...</label>
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
    Airports
</div>
<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="margin:0 auto; width:100%">
    <thead>
        <tr>
            <th class="mdl-data-table__cell--non-numeric">Code</th>
            <th class="mdl-data-table__cell--non-numeric">Name</th>
            <th class="mdl-data-table__cell--non-numeric">City</th>
            <th class="mdl-data-table__cell--non-numeric">Country</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <th class="mdl-data-table__cell--non-numeric"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($airports as $airport)
        <tr>
            <td class="mdl-data-table__cell--non-numeric">{{$airport->code}}</td>
            <td class="mdl-data-table__cell--non-numeric">{{$airport->name}}</td>
            <td class="mdl-data-table__cell--non-numeric">{{$airport->cityName}}</td>
            <td class="mdl-data-table__cell--non-numeric">{{$airport->countryName}}</td>
            <td>{{$airport->lat}}</td>
            <td>{{$airport->lon}}</td>
            <td class="mdl-data-table__cell--non-numeric">
                @if($airport->flights->count()>0)
                <a href="/?id={{$airport->id}}" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored">
                    <i class="material-icons">airplanemode_active</i>
                </a>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="divTableTitle">
    <a href="?{{'page=1&search=' . Request::query('search')}}" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored">
    <i class="material-icons">first_page</i>
    </a>
    @if($airports->currentPage() > 1)
    <a href="{{$airports->previousPageUrl() . '&search=' . Request::query('search') }}" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored">
    <i class="material-icons">keyboard_arrow_left</i>
    </a>
    @endif
    @if($airports->currentPage() < ceil($airports->total() / 15))
    <a href="{{$airports->nextPageUrl() . '&search=' . Request::query('search')}}" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored">
    <i class="material-icons">keyboard_arrow_right</i>
    </a>
    @endif
    
    <a href="?page={{ceil($airports->total() / 15) . '&search=' . Request::query('search')}}" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored">
    <i class="material-icons">last_page</i>
    </a>
</div>

@endsection