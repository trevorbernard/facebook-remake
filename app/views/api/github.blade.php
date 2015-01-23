@extends('layouts.default')

@section('content')
    <h1>Github repo</h1>
    <div class="row">
        <ul>
            @foreach( $repo as $item )
                <li><a href="https://github.com/travism26/{{ $item->{'name'} }}" target="_blank">{{ $item->{'name'} }}</a></li>
            @endforeach
        </ul>
    </div>
@stop