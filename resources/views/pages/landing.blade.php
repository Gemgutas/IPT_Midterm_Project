@extends('layouts.app')
@section('content')

    <div class="container-landing">
        <div class="container-menu">
            <h1 class="menu">Main Menu</h1>
            <hr>
            <ul class="ul-landing">
                <li class="li-style"><a class="custom-links" href="{{url('/')}}">Home</a></li>
                <li class="li-style"><a class="custom-links" href="{{url('/users')}}">Users</a></li>
                <li class="li-style"><a class="custom-links" href="{{url('/accounts')}}">Accounts</a></li>
            </ul>
        </div>
    </div>


@endsection()
