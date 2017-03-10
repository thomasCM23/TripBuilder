@extends ('layouts.master')


@section ('content')
<ul>
@foreach($flights as $flight)

<li>
{{$flight->airportFrom->cityName}} ----- {{$flight->airportTo->cityName}}
</li>

@endforeach
</ul>

@endsection