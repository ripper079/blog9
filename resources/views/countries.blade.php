<h1>List all countries!!!! Total count of them {{count($countrieslist)}}</h1>
<h4>Countries</h4>

<ul>
@foreach ($countrieslist as $country)
    @if ($country == 'Sweden')
        <li>{{ $country }} - home of IKEA!</li>
    @elseif ($country == 'Finland')
        <li>{{ $country }} - home of Sauna!</li>
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

@for ($i = 0; $i < count($countrieslist); ++$i)
    <h4>{{ $countrieslist[$i] }}</h4>
@endfor

<!-- Even possible to pass it and use it in javascript -->
@csrf
<script>
    var data=@json($countrieslist);
    console.warn(data[0]);
</script>
