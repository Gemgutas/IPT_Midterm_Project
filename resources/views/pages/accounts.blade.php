@extends('layouts.app')
@section('content')
        <div class="mt-3">
            <div class="h1">Accounts</div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr class="bg-primary">
                        <th>Account #</th>
                        <th>Account Name</th>
                        <th>Initial Investment</th>
                        <th>Date Started</th>
                    </tr>
                </thead>
                <tbody >
                    @foreach($list_accounts as $accounts)
                        <tr>
                            <th>{{$accounts->user_id}}</th>
                            <th>{{$accounts->acct_name}}</th>
                            <th>{{$accounts->init_invest}}</th>
                            <th>{{$accounts->start_date}}</th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection()
