@extends('layout')
@section('content')
@section('title')
@endsection

  <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
    <h1 class="display-4 fw-normal">Pricing</h1>
    <p class="fs-5 text-muted">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
  </div>

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">trainer_name</th>
      <th scope="col">trainer_email</th>
      <th scope="col">trainer_phone</th>
      <th scope="col">companies_id</th>
      <th scope="col">companies_name</th>
    </tr>
  </thead>
  <tbody>
      @foreach($trainers as $trainer):
        <tr>
            <th>{!! $trainer->trainer_id !!}</th>
            <td>{!! $trainer->trainer_name !!}</td>
            <td>{!! $trainer->traniner_email !!}</td>
            <td>{!! $trainer->trainer_phone !!}</td>
            <td>{!! $trainer->company_id !!}</td>
            <td>{!! $trainer->companiesTrainer['company_name'] !!}</td>
        </tr>   
      @endforeach
  </tbody>
</table>
    {{$trainers -> links()}}
@endsection

