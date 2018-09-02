@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in! 
                    <br/><br/>
                    <h4>User Information</h4>
                    @foreach ( $userAttributes as $userAttribute)
                        <p>{{ ucwords(str_replace('_', ' ', $userAttribute)) }}: {{$currentUser->$userAttribute}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
