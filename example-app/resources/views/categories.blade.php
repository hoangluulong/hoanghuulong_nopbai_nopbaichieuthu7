@extends('layout')
@section('content')
@section('title')
@endsection

<body data-new-gr-c-s-check-loaded="14.983.0" data-gr-ext-installed="">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/trainers')}}">Trainers</a>
                    </li>  
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/companies')}}">Companies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/searchcompanies')}}">Search Companies</a>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0" action="{{URL::to('/searchtrainers')}}">
                    <input class="form-control mr-sm-2" type="search" name="trainer_name" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    
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

        

            <!-- Bootstrap core JavaScript
        ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
            <script>
                window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')

            </script>
            <script src="../../assets/js/vendor/popper.min.js"></script>
            <script src="../../dist/js/bootstrap.min.js"></script>
            <script src="../../assets/js/vendor/holder.min.js"></script>
            <script>
                Holder.addTheme('thumb', {
                    bg: '#55595c',
                    fg: '#eceeef',
                    text: 'Thumbnail'
                });

            </script>
@endsection
