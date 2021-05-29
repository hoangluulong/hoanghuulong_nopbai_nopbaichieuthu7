@extends('layout')
@section('content')
@section('title')
@endsection
        <div class='container'>
            <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">trainer_name</th>
                    <th scope="col">trainer_email</th>
                    <th scope="col">trainer_phone</th>
                    <th scope="col">company_id</th>
                </tr>
            </thead>
            <tbody>
                @isset($name)
                @foreach($trainerssearch as $trainer):
                <tr>
                    <th>{!! $trainer->trainer_id !!}</th>
                    <td>{!! $trainer->trainer_name !!}</td>
                    <td>{!! $trainer->traniner_email !!}</td>
                    <td>{!! $trainer->trainer_phone !!}</td>
                    <td>{!! $trainer->company_id !!}</td>
                </tr>   
                @endforeach
                @endisset
            </tbody>
        </table>
        @isset($name)
        {{$trainerssearch -> links()}}
        @endisset
        </div>
@endsection
