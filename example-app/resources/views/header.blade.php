<body data-new-gr-c-s-check-loaded="14.983.0" data-gr-ext-installed="">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/companies')}}">Companies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/categories')}}">Category</a>
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