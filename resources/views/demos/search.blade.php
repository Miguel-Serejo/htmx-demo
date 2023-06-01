@foreach ($results as $result)
    <p><span class="name">{{$result['name']}}</span>: <span class="talks">{{count($result['talks'])}} talks</span></p>
@endforeach
<p>Showing {{$count}} results of {{$total}}</p>