@extends('layout')
@section('content')
@section('title')
@endsection
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">List category</h1>
        <div class="container w-75">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="color" scope="col">ID</th>
                        <th class="color" scope="col">Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category):
        <tr>
            <th>{!! $category->category_id !!}</th>
            <td>{!! $category->category_name !!}</td>
        </tr>   
      @endforeach
                </tbody>
            </table>
        </div>


      
        </div>

@endsection
