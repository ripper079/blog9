<h1>List all countries!!!! Total count of them {{count($countrieslist)}}</h1>
<h4>Countries</h4>

<ul>
@foreach ($countrieslist as $country)
    @if ($country == 'Sweden')
        <li>{{ $country }} - home of IKEA!</li>
    @else
        <li>{{ $country }}</li>
    @endif
@endforeach
</ul>

<h4>Black listed countris</h4>
<ul>
@foreach ($countrieslist as $blacklistedcountry)
    @if ($blacklistedcountry == "Badcountry")
       <li>{{$blacklistedcountry}}</li>
    @endif
@endforeach
</ul>