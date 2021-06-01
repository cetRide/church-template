@extends('layouts.default')
@section('content')

    <div class="jumbotron">
        <h1>Welcome to The Alma</h1>
        <p>
            Welcome to the premier place to get in-depth information on the Alma
        </p>

        @if (! $currentUser)
            <p>
                {!! link_to_route('admin', 'Dashboard', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </p>
        @endif
    </div>
@stop