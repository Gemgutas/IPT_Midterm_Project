@extends('layouts.app')
@section('content')

    <div class="mt-3">
        <div class="h1">Users</div>
        <table class="table table-bordered table-striped">
        <thead>
                <tr class="bg-primary">
                    <th>User ID</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody >
                @foreach($list_users as $users)
                <tr >
                    <th>{{$users->id}}</th>
                    <th>{{$users->lname}}</th>
                    <th>{{$users->fname}}</th>
                    <th>{{$users->address}}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection()
