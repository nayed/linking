@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                    @foreach ($links as $link)
                        <li><a href="{{ $link->url }}" target="_blank">{{ $link->title }}</a></li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
