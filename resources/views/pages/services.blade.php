@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    @if(count($services) > 0)
        <ul>
            @foreach($services as $url => $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
    @endif

    <div>
        @if(count($services) > 0)
            @foreach($services as $url => $service)
                <div>
                    <a href="/service/{{$url}}">

                        {{$service}}

                    </a>
                </div>
            @endforeach
        @endif
    </div>
@endsection
